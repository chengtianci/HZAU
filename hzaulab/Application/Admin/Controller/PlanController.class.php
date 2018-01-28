<?php
namespace Admin\Controller;
use Think\Controller;
use Admin\Model\CgjhModel;

class PlanController extends Controller {
	// 展示所有的计划详情
    public function plan(){
    	$model = new CgjhModel();
    	$this->assign("allPlan", $model -> selectAll());
        $this->display();
    }

    // 添加一个详细的计划
    public function addOne() {
    	$model = new CgjhModel();
    	if ($model->addOne($_POST)) {
    		alertMessage("添加成功！");
    	} else {
    		alertMessage("添加失败！");
    	}
    }
}