<?php
	namespace Home\Model;
	use Think\Model\RelationModel;
	class EitemsModel extends RelationModel {
		// 获得一个具体的仪器设备
		public function getOne($argument) {
			$model = M("Eitems");
			return $model -> where("eid = $argument") -> find();
		}
	}