<?php
	namespace Home\Model;
	use Think\Model\RelationModel;
	class SomethingModel extends RelationModel {
		// 查询一个的注释
		public function getOneThing($value='')
		{
			$model = new SomethingModel();
			return $model -> where("id = $value") -> find();
		}
	}
?>