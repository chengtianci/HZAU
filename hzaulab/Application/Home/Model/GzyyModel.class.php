<?php
	namespace Home\Model;
	use Think\Model\RelationModel;
	class GzyyModel extends RelationModel {
		// 插入一条申请
		public function insertApplication($info)
		{
			# code...
			$mode = M("Gzyy");
			return $mode -> add($info);
		}
	}