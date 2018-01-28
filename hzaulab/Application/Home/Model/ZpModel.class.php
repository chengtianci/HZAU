<?php
	namespace Home\Model;
	use Think\Model\RelationModel;
	class ZpModel extends RelationModel {
		// 查询所有照片
		public function selectAll()
		{
			# code...
			$mode = M("Zp");
			return $mode -> select();
		}
	}
?>