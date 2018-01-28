<?php
namespace Admin\Controller;
use Think\Controller;
use Admin\Model\JsModel;
use Admin\Model\YyModel;
use Admin\Model\PzModel;
use Admin\Model\SomethingModel;



class FieldController extends Controller {
    public function index(){
        $this->display();
    }
    // 大田设施页面发布方法
   	public function fieldluanch() {
   		$mode = new JsModel();
    	$this -> assign("data", $mode -> getOneIntro(3));
   		$this -> display();
   	}

   	public function field($value='')
   	{
   		# code...
   		$mode = new JsModel();
    	$this -> assign("data", $mode -> getOneIntro(7));
   		$this -> display();
   	}
    public function OpenPot($value='')
    {
      # code...
      $mode = new YyModel();
      $this -> assign("data", $mode -> selectAll());
      $this -> assign("checked", $mode -> selectAllHistory());

      $model = new PzModel();
      $nowTime = strtotime(date("Y-m-d"));
      $uname = "admin";//假定用户为admin
      $pzinfo = $model -> getAllPz();//放置pz信息，在c层处理，改变status为0123之类的，就不用js实现了
      $this -> assign("allPz", $pzinfo);


      // 露天盆栽场的基本信息的更改
      $thePzModel = new SomethingModel();
      $theContent = $thePzModel -> getOneThing(1);

      $output =  preg_replace('/<div[^>]*>/i' , '<div>' , $theContent['thecontent']);
      $this -> assign("thePzModel", $output);
      $this -> display();

    }
    // 管理员进行批准操作
    public function doAgree($value='')
    {
      # code...
      // $show_date 表示当前的时间
      $show_date=date('Y-m-d');
      $dangqianshijian = strtotime($show_date);


      $mode = new YyModel();
      $model = M("Log");
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
    public function doReject($value='')
    {
      # code...
      $mode = new YyModel();
      $where = getValue();
      if ($mode -> rejectApplication($where)) {
        alertMessage("拒绝成功！");
      } else {
        alertMessage("请检查网络后重试！");
      }
    }

    // 修改基本的简介情况
    public function changeTheIntro($value='')
    {
       $model = new SomethingModel();
       // $content = htmlspecialchars_decode($_POST['msct']);
       $content = htmlspecialchars_decode($_POST['msct']);
       if ($content != "") {
          if ($model -> modifyOneThing(1, $content)) {
            $data = "success";
          }
       }
       echo json_encode($data);
    }

    // 设定基本你的信息，锁定或者是开放
    public function changeTheStatus($value='')
    {
      // 首先获取基本的信息
      $status = $_POST['caozuo'];
      $theTitle = $_POST['thecontent'];

      $model = new PzModel();
      for ($i = 0; $i < count($theTitle); $i++) {
        $model -> modifyThePenzai($theTitle[$i], $status);
      }
      echo json_encode($theTitle);
    }

    // 导出表格的操作
    public function doTheExport() {
      $model = new YyModel();
      $subject = "露天盆栽场申请历史";
      $title = array('预约编号', '设备编号', '预约人', '预约开始时间', '预约结束时间', '是否允许预约', '样品物种', '备注', '设施名称', '设施位置', '预约生成时间', '申请拒绝理由');
      exportExcel($model -> selectAllHistory(),$title,$subject);
    }
}