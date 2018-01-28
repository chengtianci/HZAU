<?php
	namespace Admin\Model;
	use Think\Model\RelationModel;
	class SjhcModel extends RelationModel {
		// 查询所有试剂耗材
		public function selectAll()
		{
			# code...
			$mode = M("Sjhc");
			return $mode -> select();
		}

		// 查询一条试剂耗材
		public function selectOne($id)
		{
			# code...
			$mode = M("Sjhc");
			return $mode -> where("id = $id") -> find();
		}

		// 删除一条试剂耗材
		public function deleteOne($id)
		{
			# code...
			$mode = M("Sjhc");
			return $mode -> where("id = $id") -> delete();
		}

		// 增加一条试剂耗材
		public function addOne($title, $content)
		{
			# code...
			$mode = M("Sjhc");
			$mode -> infotime = date("Y-m-d");
			$mode -> infoowner = "Admin";
			$mode -> infoname = $title;
			$mode -> infoct = $content;
			// $mode -> infoowner = $_SESSION['userid'];
			return $mode -> add();
		}

		// 修改一条试剂耗材
		public function ModifyOne($id, $title, $content)
		{
			# code...
			$mode = M("Sjhc");
			$mode -> infoname = $title;
			$mode -> infoct = $content;
			return $mode -> where("id = $id") -> save();
		}

		// 添加一项试剂耗材
		public function addOneSjhc($array) {
			$model = M("Sjhc");
			return $model -> add($array);
		}
	}
?>