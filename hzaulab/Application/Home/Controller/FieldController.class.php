<?php
namespace Home\Controller;
use Think\Controller;
use Home\Model\JsModel;
use Home\Model\PzModel;
use Home\Model\YyModel;
use Home\Model\Model; 
use Home\Model\LogModel;
use Home\Model\SomethingModel;


class FieldController extends Controller {
  
	public function field() {
		$mode = new JsModel();
        $this -> assign("data", $mode -> getOneNotice(3));
        $this -> display();
	}

  
    /**
     * 方法功能：显示页面
     */
	public function field_show1() {
		$mode = new JsModel();
        $this -> assign("data", $mode -> getOneNotice(7));
        $this -> display();
	}


    /**
     * 方法功能：显示页面
     */
	public function field_show2() {
		$mode = new PzModel();
		// $logModel = new logModel();
		$nowTime = strtotime(date("Y-m-d"));
		$uname = "admin";//假定用户为admin
		$pzinfo = $mode -> getAllPz();//放置pz信息，在c层处理，改变status为0123之类的，就不用js实现了

		$model = new SomethingModel();
		$this -> assign("theSomethingData", $model -> getOneThing(1));

		$this -> assign("nowDate", date("Y-m-d"));
		$this -> assign("data", $pzinfo);
		$this -> display();
	}

	// 导出相关的word文档

	public function doWord() {
		# code...
		# TODO 这个地方要设计表格的央视
		$user = "admin";
		$word = new \Think\Word();//示例化对象
		$word -> start();//定义要保存数据的开始
		$data = json_decode($_POST['hahaha']);
		// print $_POST['hahaha'];
		print "<table style='width:100%;' border = '1' cellspacing='0' cellpadding='20' >";
		print "<caption>实验场地预约申请表</caption>";
		for ($i = 0; $i < count($data); $i=$i+2) {
			print "<tr><td style='width: 25%'>".$data[$i][0]."</td><td style='width: 30%'>".$data[$i][1]."</td>";
			print "<td style='width: 25%'>".$data[$i+1][0]."</td><td style='width: 30%'>".$data[$i+1][1]."</td></tr>";
		}
		// border:solid #black; border-width:0px 1px 1px 0px;
		print "</table>";
		$dateStory = strtotime(date("Y-m-d h:i:s"));
		$word -> save('./User/'.$dateStory.'.doc');//定义要保存数据的结束，同时把数据保存到word中


		// $file=fopen('./User/'.$dateStory.'.doc',"r");
		// header("Content-Type: application/octet-stream");
		// header("Accept-Ranges: bytes");
		// header("Accept-Length: ".filesize('./User/'.$dateStory.'.doc'));
		// header("Content-Disposition: attachment; filename=文件名称");
		// echo fread($file,filesize('./User/'.$dateStory.'.doc'));
		// fclose($file);

	}

	// 进行预约的登记，预约表
	public function doApplication() {
		# code...
		// 插入一条记录
		// `id`, `yqid`, `uid`, `ks`, `js`, `status`, `ypwz`, `other`, `ssname`, `sslocation‘
		$info['yqid'] = $_POST['ssbh'];
		$info['ssname'] = $_POST['ssmc'];
		$info['sslocation'] = $_POST['sswz'];
		$info['uid'] = "admin";
		// $info['uid'] = $_SESSION['userid'];
		$info['ks'] = $_POST['kssj'];
		$info['js'] = $_POST['zzsj'];
		$info['status'] = 0; //默认申请处于等待申请的阶段
		$info['ypwz'] = $_POST['ypwz'];
		$info['other'] = $_POST['bz'];
		$info['date'] = date("Y-m-d");

		// 首先对相关的信息进行判断
		$this -> doSomeRightOrFalse($info);


		$mode = new YyModel();
		if ($mode -> insertApplication($info)) {
			alertMessage("已经申请，等待管理员批准");
		} else {
			alertMessage("请检查网络后重试！");
		}
	}

	public function doSomeRightOrFalse($value='')
	{
		if ($value['ks'] == "" || $value['js'] == "" || $value['ypwz'] == "") {
			alertMessage("请填写完整的信息");
		}	
	}
}

?>