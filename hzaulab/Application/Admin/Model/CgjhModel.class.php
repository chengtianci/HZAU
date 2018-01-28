<?php
	namespace Admin\Model;
	use Think\Model\RelationModel;
	class CgjhModel extends RelationModel {
		// 查询所有采购计划
		public function selectAll()
		{
			# code...
			$mode = M("Cgjh");
			return $mode -> select();
		}

		// 查询一条采购计划
		public function selectOne($id)
		{
			# code...
			$mode = M("Cgjh");
			return $mode -> where("id = $id") -> find();
		}

		// 删除一条采购计划
		public function deleteOne($id)
		{
			# code...
			$mode = M("Cgjh");
			return $mode -> where("id = $id") -> delete();
		}

		// 增加一条采购计划
		public function addOne($title, $content)
		{
			# code...
			$mode = M("Cgjh");
			$mode -> infotime = date("Y-m-d");
			$mode -> infoowner = "Admin";
			$mode -> infoname = $title;
			$mode -> infoct = $content;
			// $mode -> infoowner = $_SESSION['userid'];
			return $mode -> add();
		}

		// 修改一条采购计划
		public function ModifyOne($id, $title, $content)
		{
			# code...
			$mode = M("Cgjh");
			$mode -> infoname = $title;
			$mode -> infoct = $content;
			return $mode -> where("id = $id") -> save();
		}
	}
?>