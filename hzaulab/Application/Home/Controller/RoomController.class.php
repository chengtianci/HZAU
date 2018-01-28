<?php
namespace Home\Controller;
use Think\Controller;
use Home\Model\JsModel;
use Home\Model\PzModel;
use Home\Model\LogModel;

use Home\Model\WwModel;
use Home\Model\WwyyModel;

use Home\Model\GzModel;
use Home\Model\GzyyModel;

use Home\Model\SomethingModel;


class RoomController extends Controller {
  
    public function room($value='') {
        $mode = new JsModel();
        $this -> assign("data", $mode -> getOneNotice(4));
        $this -> display();
    }

  
    /**
     * 方法功能：显示页面
     */
    public function room_show1() {
        $mode = new WwModel();
        // $logModel = new logModel();
        $nowTime = strtotime(date("Y-m-d"));
        $uname = "admin";//假定用户为admin
        $pzinfo = $mode -> getAllWw(0);//放置pz信息，在c层处理，改变status为0123之类的，就不用js实现了
        $this -> assign("data", $pzinfo);

        $model = new SomethingModel();
        $this -> assign("zhushi", $model -> getOneThing(2));

        $this -> display();
    }

    public function room_show1_two() {
        $mode = new WwModel();
        // $logModel = new logModel();
        $nowTime = strtotime(date("Y-m-d"));
        $uname = "admin";//假定用户为admin
        $pzinfo = $mode -> getAllWw(1);//放置pz信息，在c层处理，改变status为0123之类的，就不用js实现了
        $this -> assign("data", $pzinfo);

        $model = new SomethingModel();
        $this -> assign("zhushi", $model -> getOneThing(3));

        $this -> display();
    }

    /**
     * 方法功能：显示页面
     */
	public function room_show2() {

        $mode = new GzModel();
        // $logModel = new LogModel();
        $nowTime = strtotime(date("Y-m-d"));
        $uname = "admin";//假定用户为admin
        $pzinfo = $mode -> getAllGz(1);//放置pz信息，在c层处理，改变status为0123之类的，就不用js实现了
        $this -> assign("data", $pzinfo);

        $model = new SomethingModel();
        $this -> assign("zhushi", $model -> getOneThing(4));

		$this -> display();
	}

    /**
     * 方法功能：显示页面
     */
    public function room_show2_two() {

        $mode = new GzModel();
        // $logModel = new LogModel();
        $nowTime = strtotime(date("Y-m-d"));
        $uname = "admin";//假定用户为admin
        $pzinfo = $mode -> getAllGz(0);//放置pz信息，在c层处理，改变status为0123之类的，就不用js实现了
        $this -> assign("data", $pzinfo);

        $model = new SomethingModel();
        $this -> assign("zhushi", $model -> getOneThing(5));
        $this -> display();
    }

        // 导出相关的word文档
    public function doWord($value='')
    {
        # code...
        # TODO 这个地方要设计表格的央视
        $word = new \Think\Word();//示例化对象
        $word -> start();//定义要保存数据的开始

        $data = json_decode($_POST['hahaha']);
        print "<table>";
        for ($i = 0; $i < count($data); $i++) {
            print "<tr><td>".$data[$i][0]."</td><td>".$data[$i][1]."</td></tr>";
        }
        print "</table>";
        $word -> save('word_c1.doc');//定义要保存数据的结束，同时把数据保存到word中
    }

    // 进行预约的登记，预约表
    public function doApplication($value='')
    {
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
        $mode = new WwyyModel();
        if ($mode -> insertApplication($info)) {
            alertMessage("已经申请，等待管理员批准");
        } else {
            alertMessage("请检查网络后重试！");
        }
    }


        // 进行预约的登记，预约表
    public function doApplication1($value='')
    {
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
        $mode = new GzyyModel();
        if ($mode -> insertApplication($info)) {
            alertMessage("已经申请，等待管理员批准");
        } else {
            alertMessage("请检查网络后重试！");
        }
    }

  

  
}
?>