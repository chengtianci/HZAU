<?php
namespace Home\Controller;
use Think\Controller;
use Home\Model\JsModel;
use Home\Model\EquipmentModel;
use Home\Model\EitemsModel;
use Home\Model\EqyyModel;


class EquipmentController extends Controller {
	private $theid;
 	public function equipment($value='') {
        $mode = new JsModel();
        $this -> assign("data", $mode -> getOneNotice(6));
        $this -> display();
 	}


	public function equipment_show1() {
		$model = new Equipmentmodel();
		$Page = new \Think\Page($model -> getAllCount(0), 9);
        $show = $Page->show();// 分页显示输出
        $pre = $Page -> firstRow;
        $next = $Page -> listRows;
        $this -> assign("show", $show);
		$this -> assign("data",$model -> getBasic(0, $pre, $next));
		$this -> assign("thetitle", "公共实验室");
		// $this -> display("Laboratory/laboratory_show1");
		$this -> display();
	}
	public function equipment_show2() {
      
		$this -> display();
	}

	public function equipment_show1_eqt() {
		$id = $this -> getTheId();
		$model = new Equipmentmodel();
		$itemsModel = new EitemsModel();
		$all = $model -> getOne($id);
		$this -> assign("basic", $all['basic']);
		$this -> assign("contact", $all['contact']);
		$this -> assign("other", $itemsModel -> getOne($id));
		$this -> display();
	}

	public function equipment_show1_apply($value='') {
		$model = new Equipmentmodel();
		$all = $model -> getOne($this -> getTheId());

		switch($all['basic']['eqclass']) {
	        case 1: $hahaha = "公共实验室"; break;
	        case 2: $hahaha = "教学实验室"; break;
	        case 3: $hahaha = "实验辅助室"; break;
	    }
		$this -> assign("hehehe", $hahaha);
	    
		$this -> assign("basic", $all['basic']);	
		$this -> display();	
	}

	// 获得前台页面传过来的id值
	public function getTheId($value='') {
		return $_GET['id'];
	}

	// 进行预约的登记，预约表
    public function doApply($value='') {
        // `id`, `yqid`, `uid`, `ks`, `js`, `status`, `ypwz`, `other`, `ssname`, `sslocation‘
        $info['yqid'] = $_POST['sbbh'];
        $info['ssname'] = $_POST['yqmc'];
        $info['sslocation'] = $_POST['cfwz'];
        $info['uid'] = "admin";
        // $info['uid'] = $_SESSION['userid'];
        $info['ks'] = $_POST['kssj'];
        $info['js'] = $_POST['zzsj'];
        $info['status'] = 0; //默认申请处于等待申请的阶段
        $info['ypwz'] = $_POST['ypwz'];
        $info['date'] = date("Y-m-d");
        $info['yjxm'] = $_POST['yjxm'];
        $info['bigtype'] = $_POST['hehehe'];
        $mode = new EqyyModel();
        if ($mode -> insertApplication($info)) {
            alertMessage("已经申请，等待管理员批准");
        } else {
            alertMessage("请检查网络后重试！");
        }
    }

	public function doWord() {
		# code...
		# TODO 这个地方要设计表格的央视
		$user = "admin";
		$word = new \Think\Word();//示例化对象
		$word -> start();//定义要保存数据的开始
		$data = json_decode($_POST['hahaha']);
		// print $_POST['hahaha'];
		print "<table style='width:100%;' border = '1' cellspacing='0' cellpadding='20' >";
		print "<caption>实验设备预约申请表</caption>";
		for ($i = 0; $i < count($data); $i=$i+2) {
			print "<tr><td style='width: 25%'>".$data[$i][0]."</td><td style='width: 30%'>".$data[$i][1]."</td>";
			print "<td style='width: 25%'>".$data[$i+1][0]."</td><td style='width: 30%'>".$data[$i+1][1]."</td></tr>";
		}
		// border:solid #black; border-width:0px 1px 1px 0px;
		print "</table>";
		$dateStory = strtotime(date("Y-m-d h:i:s"));
		$word -> save('./User/'.$dateStory.'.doc');//定义要保存数据的结束，同时把数据保存到word中
	}

}
?>