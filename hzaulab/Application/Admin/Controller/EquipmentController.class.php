<?php
namespace Admin\Controller;
use Think\Controller;
use Admin\Model\JsModel;
use Admin\Model\EqyyModel;
use Admin\Model\EquipmentModel;
use Admin\Model\SjhcModel;

class EquipmentController extends Controller {
    public function index(){
        $this->display();
    }

    // 这是仪器设备的页面发布
    public function equipmentluanch() {
    	$mode = new JsModel();
    	$this -> assign("data", $mode -> getOneIntro(6));
    	$this -> display();
    }

    public function equipment() {
    	// 得到所有的实验室信息
    	$model = new EquipmentModel();
    	$this -> assign("data", $model -> getBasic(0));
    	// 得到所有的预约信息
    	$modelYy = new EqyyModel();
    	$this -> assign("unchecked", $modelYy -> selectAll("仪器设备"));
    	$this -> assign("checkedhistory", $modelYy -> selectAllHistory("仪器设备"));

    	$this -> display();
    }

    // 删除一条仪器设备的信息
    public function deleteMe() {
    	$model = new Equipmentmodel();
    	if ($model -> deleteEquipment(getValue())) {
    		alertMessage("删除成功！");
    	} else {
    		alertMessage("请检查网络后重试！");
    	}
    }

    // 添加一项设备
    public function doAddOneEquipment($info) {
        $model = new Equipmentmodel();
        
    }

    // 试剂耗材方法
    public function consume() {
        $model = new SjhcModel();
        $allSjhc = $model -> selectAll();
        $this -> assign("allSjhc", $allSjhc);
        $this -> display();
    }

    // 添加一项仪器耗材
    public function addConsume() {
        $model = new SjhcModel();
        if ($model -> addOneSjhc($_POST)) {
            alertMessage("添加成功！");
        } else {
            alertMessage("添加失败！");
        }
    }
}