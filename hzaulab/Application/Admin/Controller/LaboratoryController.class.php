<?php
namespace Admin\Controller;
use Think\Controller;
use Admin\Model\JsModel;
use Admin\Model\EquipmentModel;
use Admin\Model\EqyyModel;

class LaboratoryController extends Controller {
    public function index(){
        $this->display();
    }

    //实验室页面发布
    public function labluanch() {
    	$mode = new JsModel();
    	$this -> assign("data", $mode -> getOneIntro(5));
    	$this -> display();
    }

    // 公共实验室相关操作
    public function publiclab($value='') {
    	// 得到所有的实验室信息
    	$model = new EquipmentModel();
    	$this -> assign("data", $model -> getBasic(1));
    	// 得到所有的预约信息
    	$modelYy = new EqyyModel();
    	$this -> assign("unchecked", $modelYy -> selectAll("公共实验室"));
    	$this -> assign("checkedhistory", $modelYy -> selectAllHistory("公共实验室"));

    	$this -> display();
    }

    // 教学实验室相关操作
    public function sublab($value='') {
    	// 得到所有的实验室信息
    	$model = new EquipmentModel();
    	$this -> assign("data", $model -> getBasic(3));
    	// 得到所有的预约信息
    	$modelYy = new EqyyModel();
    	$this -> assign("unchecked", $modelYy -> selectAll("实验辅助室"));
    	$this -> assign("checkedhistory", $modelYy -> selectAllHistory("实验辅助室"));

    	$this -> display();
    }

    // 实验辅助室相关操作
    public function teachlab($value='') {
    	// 得到所有的实验室信息
    	$model = new EquipmentModel();
    	$this -> assign("data", $model -> getBasic(2));
    	// 得到所有的预约信息
    	$modelYy = new EqyyModel();
    	$this -> assign("unchecked", $modelYy -> selectAll("教学实验室"));
    	$this -> assign("checkedhistory", $modelYy -> selectAllHistory("教学实验室"));

    	$this -> display();
    }

    // 管理员进行批准操作
    public function doAgree($value='') {
      // $show_date 表示当前的时间
      $show_date=date('Y-m-d');
      $dangqianshijian = strtotime($show_date);


      $mode = new EqyyModel();
      $model = M("Eqlog");
      $where = getValue();
      // 首先从数据库中获取要批准的信息，包括设备编号以及预约的开始时间和结束时间
      $oneApplication = $mode -> getOneApplication($where);
      $startDateApplication = $oneApplication['ks'];
      $endDateApplication = $oneApplication['js'];
      $startShijianchuo = strtotime($startDateApplication);
      $endShiJianchuo = strtotime($endDateApplication);

      $allEquipment = $oneApplication['yqid'];

      // 获取该预约人所选择的仪器设备
      $theEquipment = explode(',', $allEquipment);

      for ($i = 0; $i < count($theEquipment); $i++) {
        $theDollId = $theEquipment[$i];
        $data = $mode -> getOneEquipment($theEquipment[$i]);//数据库中的仪器设备的资料
        // 转化为时间戳，便于比较

        $result = $model -> where("yiid = '$theDollId'") -> select(); 

        for ($j = 0; $j < count($result); $j++) {
          $theEnd = strtotime($result[$j]['jshj']);
          $theStart = strtotime($result[$j]['kssj']);
          if (($endShiJianchuo >= $theStart && $endShiJianchuo <= $theEnd) || ($startShijianchuo >= $theStart && $startShijianchuo <= $theEnd)) {
            alertMessage("与已经批准的时间有冲突，请拒绝！");
            exit();
          }
        }

        $model -> username = "Admin";
        $model -> kssj = $startDateApplication;
        $model -> jshj = $endDateApplication;
        $model -> yiid = $theDollId;
        $model -> add();
      }
      if ($mode -> doApplication($where)) {
        alertMessage("批准成功！");
      } else {
        alertMessage("请检查网络后重试！");
      }
    }

    // 管理员进行拒绝操作
    public function doReject($value='') {
      $mode = new EqyyModel();
      $where = getValue();
      if ($mode -> rejectApplication($where)) {
        alertMessage("拒绝成功！");
      } else {
        alertMessage("请检查网络后重试！");
      }
    }

    // 导出表格的操作
    public function doTheExport() {
      $model = new EqyyModel();
      $type = $_POST['value'];
      $subject = $type."申请历史";
      $title = array('预约编号', '设备编号', '预约人', '预约开始时间', '预约结束时间', '是否允许预约', '样品物种', '备注', '设施名称', '设施位置', '预约生成时间', '申请拒绝理由');
      exportExcel($model -> selectAllHistory($type),$title,$subject);
    }

    // 查看某一个具体的信息
    public function labdis($value='') {
		$id = getValue();
		$model = new Equipmentmodel();
		$all = $model -> getOne($id);
		$this -> assign("basic", $all['basic']);
		$this -> assign("contact", $all['contact']);
		$this -> display();
    }

    // 修改一条仪器设备的信息
    public function changeMe($value='') {
      if ($_FILES['gallery_title']['name'] == "") {

      } else {
        $Realname = $_FILES['gallery_title']['name'];
        $upload = new \Think\Upload();//实例化上传类
        $upload -> maxSize = 3145728;//设置上传文件的大小
        $upload->rootPath  =   './Uploads/'; // 设置附件上传根目录
        $upload->savePath  =   './Equipment/Imagics/'; // 设置附件上传（子）目录
        $upload->saveName = 'time';
        //上传文件
        $message = $upload -> upload();
        if(!$message){
            //上传错误提示信息
            alertMessage($upload->getError());
        }
        $info['imagicaddress'] = $message['gallery_title']['savepath'].$message['gallery_title']['savename'];
        var_dump($info['imagicaddress']);
      }
    	$model = new Equipmentmodel();
    	$info['ecname'] = $_POST['ecname'];
    	$info['eoutid'] = $_POST['eoutid'];
    	$info['eprice'] = $_POST['eprice'];
    	$info['elocation'] = $_POST['elocation'];
    	$info['eblong'] = $_POST['eblong'];
    	$info['now'] = $_POST['now'];
    	$info['introduction'] = $_POST['introduction'];
    	$where = $_POST['theid'];
    	if ($model -> modifyEquipment($where, $info)) {
    		alertMessage("修改成功！");
    	} else {
    		alertMessage("请检查网络后重试！");
    	}
    }

    // 删除一条仪器设备的信息
    public function deleteMe() {
    	$model = new Equipmentmodel();
    	if ($model -> deleteEquipment(getValue())) {
    		$this -> redirect("publiclab");
    	} else {
    		alertMessage("请检查网络后重试！");
    	}
    }
}