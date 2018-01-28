<?php
	namespace Home\Model;
	use Think\Model\RelationModel;
	class WwyyModel extends RelationModel {
		// 插入一条申请
		public function insertApplication($info) {
			# code...
			$mode = M("Wwyy");
			return $mode -> add($info);
		}
	}