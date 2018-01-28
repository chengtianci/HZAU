<?php
	namespace Admin\Model;
	use Think\Model\RelationModel;
	class ContactModel extends RelationModel {
		// 查询所有的联系人信息
		public function getAllContact($value='')
		{
			$model = M("Contact");
			return $model -> select();
		}
		// 添加一条联系人的信息
		public function addAcontact($value='')
		{
			$model = M("Contact");
			if ($model -> create($value)) {
				alertMessage("添加成功！");
			} else {
				alertMessage("请检查网络后重试！");
			}
		}
		// 修改一条联系人的信息
		public function modifyContact($value='', $where = -1)
		{
			$model = M("Contact");
			$model -> name = $value['name'];
			$model -> phone = $value['phone'];
			$model -> zuoji = $value['zuoji'];
			$model -> type = $value['type'];
			if ($model->where("id = $where")->save()) {
				alertMessage("修改成功！");
			} else {
				alertMessage("请检查网络后重试！");
			}
		}
		// 删除一条联系人的信息
		public function deleteContact($where)
		{	
			$model = M("Contact");
			if ($model->where("id = $where")->delete()) {
				alertMessage("删除成功！");
			} else {
				alertMessage("请检查网络后重试");
			}
		}
	}
?>