<?php
	namespace Admin\Model;
	use Think\Model\RelationModel;
	class SomethingModel extends RelationModel {
		// 查询一个的注释
		public function getOneThing($value='')
		{
			$model = new SomethingModel();
			return $model -> where("id = $value") -> find();
		}

		// 修改一个信息的注释
		public function modifyOneThing($value='', $content = "这里是注释")
		{
			$model = new SomethingModel();
			$model -> theContent = $content;
			return $model -> where("id = $value") -> save(); 
		}
	}
?>