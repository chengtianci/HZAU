<?php
namespace Home\Controller;
use Think\Controller;
use Home\Model\JsModel;
use Home\Model\EquipmentModel;
use Home\Model\EqyyModel;


class LaboratoryController extends Controller {
	public function laboratory($value='') {
        $mode = new JsModel();
        $this -> assign("data", $mode -> getOneNotice(5));
        $this -> display();
	}
  
	public function laboratory_show1() {
		$model = new Equipmentmodel();
		$Page = new \Think\Page($model -> getAllCount(1), 9);
        $show = $Page->show();// 分页显示输出
        $pre = $Page -> firstRow;
        $next = $Page -> listRows;
        $this -> assign("show", $show);
		$this -> assign("data",$model -> getBasic(1, $pre, $next));
		$this -> assign("thetitle", "公共实验室");
		$this -> display();
	}
	public function laboratory_show2() {
		$model = new Equipmentmodel();
		$Page = new \Think\Page($model -> getAllCount(2), 9);
        $show = $Page->show();// 分页显示输出
        $pre = $Page -> firstRow;
        $next = $Page -> listRows;
        $this -> assign("show", $show);
		$this -> assign("data",$model -> getBasic(2, $pre, $next));
		$this -> assign("thetitle", "教学实验室");
		$this -> display("laboratory_show1");
	}
	public function laboratory_show3() {
		$model = new Equipmentmodel();
		$Page = new \Think\Page($model -> getAllCount(3), 9);
        $show = $Page->show();// 分页显示输出
        $pre = $Page -> firstRow;
        $next = $Page -> listRows;
        $this -> assign("show", $show);
		$this -> assign("data",$model -> getBasic(3, $pre, $next));
		$this -> assign("thetitle", "实验辅助室");
		$this -> display("laboratory_show1");
	}

	public function laboratory_show1_article($value='') {
		$id = $this -> getTheId();
		$model = new Equipmentmodel();
		$all = $model -> getOne($id);
		$this -> assign("basic", $all['basic']);
		$this -> assign("contact", $all['contact']);
		$this -> display();
	}

	// 获得前台页面传过来的id值
	public function getTheId($value='') {
		return $_GET['id'];
	}

	public function doApply($value='') {
        // `id`, `yqid`, `uid`, `ks`, `js`, `status`, `ypwz`, `other`, `ssname`, `sslocation‘
        $info['yqid'] = $_POST['sysbh'];
        $info['ssname'] = $_POST['sysmc'];
        $info['sslocation'] = $_POST['syswz'];
        $info['uid'] = "admin";
        // $info['uid'] = $_SESSION['userid'];
        $info['ks'] = $_POST['kssj'];
        $info['js'] = $_POST['zzsj'];
        $info['status'] = 0; //默认申请处于等待申请的阶段
        $info['ypwz'] = $_POST['ypwz'];
        $info['date'] = date("Y-m-d");
        $info['yjxm'] = $_POST['sysxm'];
        $info['other'] = $_POST['bz'];
        $info['bigtype'] = $_POST['hehehe'];
        $info['zycz'] = $_POST['zycz'];
        $mode = new EqyyModel();
        if ($mode -> insertApplication($info)) {
            alertMessage("已经申请，等待管理员批准");
        } else {
            alertMessage("请检查网络后重试！");
        }
	}

	public function laboratory_apply() {
		$model = new EquipmentModel();
		$id = $this -> getTheId();
		$all = $model -> getOne($id);
	    switch($all['basic']['eqclass']) {
	        case 1: $hahaha = "公共实验室"; break;
	        case 2: $hahaha = "教学实验室"; break;
	        case 3: $hahaha = "实验辅助室"; break;
	    }
		$this -> assign("data", $all['basic']);
		$this -> assign("hehehe", $hahaha);
		$this -> display();
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
		print "<caption>实验室预约申请表</caption>";
		for ($i = 0; $i < count($data); $i=$i+2) {
			print "<tr><td style='width: 25%'>".$data[$i][0]."</td><td style='width: 30%'>".$data[$i][1]."</td>";
			print "<td style='width: 25%'>".$data[$i+1][0]."</td><td style='width: 30%'>".$data[$i+1][1]."</td></tr>";
		}
		// border:solid #black; border-width:0px 1px 1px 0px;
		print "</table>";
		$dateStory = strtotime(date("Y-m-d h:i:s"));
		$word -> save('./User/'.$dateStory.'.doc');//定义要保存数据的结束，同时把数据保存到word中
		$data = "success";
		echo json_encode($data);
	}
	
}
?>