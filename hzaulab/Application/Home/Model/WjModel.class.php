<?php
	namespace Home\Model;
	use Think\Model\RelationModel;
	class WjModel extends RelationModel {
		// 查看所有的文件并进行分页
		public function getAllWj($type, $pre, $next) {
			$mode = M("Wj");
			return $mode -> order('id desc') -> where("rsType = $type") -> limit($pre.','.$next) -> select(); 
		}
		// 查看某一个文件的信息
		public function findOneWj($value) {	
			$mode = M("Wj");
			return $mode -> where("id = $value") -> find();
		}
		public function getCount($type)
		{
			$mode = M("Wj");
			return $mode -> where("rsType = $type") -> count();
		}
		public function getFiveWj($value)
		{
			# code...
			$mode = M("Wj");
			return $mode -> where("rsType = $value") -> order("rsdate desc") -> limit(5) -> select();
		}
	}