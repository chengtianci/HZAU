<?php
namespace Home\Controller;
use Think\Controller;
use Home\Model\WjModel;
class FictitiousController extends Controller {
	public function fictitious_show1() {
		$mode = new Wjmodel();
		$Page = new \Think\Page($mode -> getCount(1), 10);
        $show = $Page->show();// 分页显示输出
        $pre = $Page -> firstRow;
        $next = $Page -> listRows;
        $this -> assign("show", $show);

		$this -> assign("data",$mode -> getAllWj(1, $pre, $next));
		$this -> display();
	}
	public function fictitious_show2() {
		$mode = new Wjmodel();
		$Page = new \Think\Page($mode -> getCount(2), 10);
        $show = $Page->show();// 分页显示输出
        $pre = $Page -> firstRow;
        $next = $Page -> listRows;
        $this -> assign("show", $show);
		$this -> assign("data",$mode -> getAllWj(2, $pre, $next));
		$this -> display();
	}
	public function fictitious_show3() {
		$mode = new Wjmodel();
		$Page = new \Think\Page($mode -> getCount(3), 10);
        $show = $Page->show();// 分页显示输出
        $pre = $Page -> firstRow;
        $next = $Page -> listRows;
        $this -> assign("show", $show);

		$this -> assign("data",$mode -> getAllWj(3, $pre, $next));
		$this -> display();
	}


	    /**
     * 文件详情的展示
     */
    public function fictitious_show1_article() {
        $where = trim($_GET['id']);
        if (empty($where)) alertMessage("查询错误");
       
       	$mode = new Wjmodel();


        $theRecord = $mode->findOneWj($where);

        $pdfWay = $theRecord['rsway'];
        $pdfWay1=explode('.',$pdfWay);//om 负数从结尾开始取
        $theRealWay = $pdfWay1[1].'.pdf';

        tranOffice($pdfWay);
        $this->assign("theRecord", $theRecord);
        $this->assign("theRealWay", $theRealWay);
        $this->assign("typehahaha", $type);
        $this->display();
    }
}
?>