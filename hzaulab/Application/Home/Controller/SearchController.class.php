<?php
	namespace Home\Controller;
	use Think\Controller;
	use Home\Model\QueryModel;
	class SearchController extends Controller {
		// 将要查询的信息保存在静态变量中，防止用户刷新之后无结果
		private static $theQuery;
		public function searchOneday($value='')
		{	
			$model = new QueryModel();
			$queryInfo = $model -> getAllQuery($_POST['date'], $_POST['theType'], $_POST['theTypeLog']);
			$this -> assign("data", $queryInfo);
			$this -> assign("nowDate", date("Y-m-d"));
			$this -> display("Field/field_show2");
		}
	}
?>