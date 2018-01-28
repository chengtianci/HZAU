<?php
namespace Admin\Controller;
use Think\Controller;
use Admin\Model\JsModel;
use Admin\Model\WwModel;
use Admin\Model\WwyyModel;

use Admin\Model\GzModel;
use Admin\Model\GzyyModel;
use Admin\Model\SomethingModel;



class RoomController extends Controller {
    public function index(){
        $this->display();
    }

    // 培养室的页面发布
    public function roomluanch() {
    	$mode = new JsModel();
    	$this -> assign("data", $mode -> getOneIntro(4));
    	$this -> display();
    }

    public function room_show1() {
    	$mode = M("Ww");
    	// var_dump($mode -> find());
    	$this -> assign("ww", $mode -> select());
    	$this -> display();
    }


    public function WimbledonRoom() {
      $mode = new WwyyModel();

      // 山南温网的基本信息的更改
      $SomethingSouth = new SomethingModel();
      $theContentSouth = $SomethingSouth -> getOneThing(2);
      $outputSouth =  preg_replace('/<div[^>]*>/i' , '<div>' , $theContentSouth['thecontent']);
      $this -> assign("thecontentsouth", $outputSouth);

      // 山北温网的基本信息的更改
      $SomethingNorth = new SomethingModel();
      $theContentNorth = $SomethingNorth -> getOneThing(3);
      $outputNorth =  preg_replace('/<div[^>]*>/i' , '<div>' , $theContentNorth['thecontent']);
      $this -> assign("thecontentnorth", $outputNorth);

      $this -> assign("dataSouth", $mode -> selectAll("山南"));
      $this -> assign("checkedSouth", $mode -> selectAllHistory("山南"));

      $this -> assign("dataNorth", $mode -> selectAll("山北"));
      $this -> assign("checkedNorth", $mode -> selectAllHistory("山北"));

      // 获得基本的信息
      $model = new WwModel();
      $nowTime = strtotime(date("Y-m-d"));
      $uname = "admin";//假定用户为admin
      $pzinfo = $model -> getAllWw(0);//放置pz信息，在c层处理，改变status为0123之类的，就不用js实现了
      $pzinfo2 = $model -> getAllWw(1);
      $this -> assign("allWw", $pzinfo);
      $this -> assign("allWwNorth", $pzinfo2);

      $this -> display();
    }

    // 修改基本的简介情况
    public function changeTheIntro($value='')
    {
       $model = new SomethingModel();
       // $content = htmlspecialchars_decode($_POST['msct']);
       $content = htmlspecialchars_decode($_POST['msct']);
       if ($content != "") {
          if ($model -> modifyOneThing($_POST['id'], $content)) {
            $data = "success";
          }
       }
       echo json_encode($data);
    }

    public function LightCultureRoom()
    {
      # code...
      $mode = new GzyyModel();

      // 东辅楼B102，B103的备注信息
      $otherModel = new SomethingModel();
      $DataofB102 = $otherModel -> getOneThing(4);
      $DataofB103 = $otherModel -> getOneThing(5);
      $DataofB102Out =  preg_replace('/<div[^>]*>/i' , '<div>' , $DataofB102['thecontent']);
      $DataofB103Out =  preg_replace('/<div[^>]*>/i' , '<div>' , $DataofB103['thecontent']);

      $this -> assign("DataofB102", $DataofB102Out);
      $this -> assign("DataofB103", $DataofB103Out);

      // 获得申请的基本信息
      $this -> assign("dataB02", $mode -> selectAll("东附楼B102"));
      $this -> assign("checkedB102", $mode -> selectAllHistory("东附楼B102"));

      $this -> assign("dataB03", $mode -> selectAll("东附楼B103"));
      $this -> assign("checkedB103", $mode -> selectAllHistory("东附楼B103"));

      // 获得基本的信息
      $model = new GzModel();
      $nowTime = strtotime(date("Y-m-d"));
      $uname = "admin";//假定用户为admin
      $pzinfo = $model -> getAllGz(1);
      $pzinfo2 = $model -> getAllGz(0);
      $this -> assign("allGzB102", $pzinfo);
      $this -> assign("allGzB103", $pzinfo2);

      $this -> display();
    }

    // 管理员进行批准操作
    public function doAgree($value='')
    {
      # code...
      // $show_date 表示当前的时间
      $show_date=date('Y-m-d');
      $dangqianshijian = strtotime($show_date);


      $mode = new WwyyModel();
      $model = M("Wwlog");
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
      $mode = new WwyyModel();
      $where = getValue();
      if ($mode -> rejectApplication($where)) {
        alertMessage("拒绝成功！");
      } else {
        alertMessage("请检查网络后重试！");
      }
    }


    // 管理员进行批准操作
    public function doAgree1($value='')
    {
      # code...
      // $show_date 表示当前的时间
      $show_date=date('Y-m-d');
      $dangqianshijian = strtotime($show_date);


      $mode = new GzyyModel();
      $model = M("Gzlog");
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
    public function doReject1($value='')
    {
      # code...
      $mode = new GzyyModel();
      $where = getValue();
      if ($mode -> rejectApplication($where)) {
        alertMessage("拒绝成功！");
      } else {
        alertMessage("请检查网络后重试！");
      }
    }

    // 修改备注信息
    public function changeSomething()
    {
      $id = $_POST['id'];
      $content = $_POST['msct'];
      $model = new SomethingModel();
      if ($model -> modifyOneThing($id, $content)) {
        $data = "success";
      }
      echo json_encode($data);
    }

    public function changeTheStatus($value='')
    {
      // 首先获取基本的信息
      $status = $_POST['caozuo'];
      $theTitle = $_POST['thecontent'];
      $model = new WwModel();
      for ($i = 0; $i < count($theTitle); $i++) {
        $model -> modifyWw($theTitle[$i], $status);
      }
      echo json_encode($theTitle);
    }

    // 导出表格的操作
    public function doTheExport() {
      $model = new WwyyModel();
      $type = $_POST['value'];
      $subject = "温网室申请历史";
      $title = array('预约编号', '设备编号', '预约人', '预约开始时间', '预约结束时间', '是否允许预约', '样品物种', '备注', '设施名称', '设施位置', '预约生成时间', '申请拒绝理由');
      exportExcel($model -> selectAllHistory($type),$title,$subject);
    }

    public function changeTheStatus2($value='')
    {
      // 首先获取基本的信息
      $status = $_POST['caozuo'];
      $theTitle = $_POST['thecontent'];
      $model = new GzModel();
      for ($i = 0; $i < count($theTitle); $i++) {
        $model -> modifyGz($theTitle[$i], $status);
      }
      echo json_encode($theTitle);
    }

    // 导出表格的操作
    public function doTheExport2() {
      $model = new GzyyModel();
      $type = $_POST['value'];
      $subject = "光照培养室申请历史".$type;
      $title = array('预约编号', '设备编号', '预约人', '预约开始时间', '预约结束时间', '是否允许预约', '样品物种', '备注', '设施名称', '设施位置', '预约生成时间', '申请拒绝理由');
      exportExcel($model -> selectAllHistory($type),$title,$subject);
    }
}