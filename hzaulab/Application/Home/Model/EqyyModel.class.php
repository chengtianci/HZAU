<?php
	namespace Home\Model;
	use Think\Model\RelationModel;
	class EqyyModel extends RelationModel {
		// 插入一条申请
		public function insertApplication($info) {
			# code...
			$mode = M("Eqyy");
			return $mode -> add($info);
		}
	}