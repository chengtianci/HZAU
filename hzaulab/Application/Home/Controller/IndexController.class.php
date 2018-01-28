<?php
namespace Home\Controller;
use Think\Controller;
use Home\Model\TzModel;
use Home\Model\WjModel;
use Home\Model\ZpModel;
class IndexController extends Controller {
    public function index(){
    	$mode = new TzModel();
    	$wjModel = new WjModel();
    	$zpModel = new zpModel();
        $this -> assign("theTz", $mode -> selectAll());
        $this -> assign("theWj", $wjModel -> getFiveWj(2));
        $this -> assign("theDownload", $wjModel -> getFiveWj(3));
        $this -> assign("theAllZp", $zpModel -> selectAll());
        $this -> display();
    }
}