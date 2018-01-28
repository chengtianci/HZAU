<?php
	namespace Admin\Model;
	use Think\Model\RelationModel;
	class EquipmentModel extends RelationModel {
		// 获取仪器名称和图片两个信息，并进行分页
		public function getBasic($argument = "") {
			$model = M('Equipment');
			return $model -> order('id desc') -> where("eqclass = $argument")-> select(); 
		} 
		// 获得所有仪器设备的总数
		public function getAllCount($argument) {
			$model = M("Equipment");
			return $model -> where("eqclass = $argument") -> count();
		}
		// 获得一个具体的仪器设备
		public function getOne($argument) {
			$model = M("Equipment");
			$result = $model -> where("id = $argument") -> find();
			$contact = M("Contact");
			$theContact = $contact -> where("id = $result[contact]") -> find();
			return array(
				"basic" => $result,
				"contact" => $theContact,
			);
		}
		// 获取所有的盆栽信息
		public function getAllEq($value='') {
			# code...
			// $show_date 表示当前的时间
			$show_date=date('Y-m-d');
			$modePz = M("Equipment");
			$deviceLists = $modePz -> order('id desc') -> where("$value = nos") -> select();


			// 查询盆栽设备的预约表
			// 条件为当前时间 $show-date在预约表中的starttime和endtime之间
			$modePzLog = M("Eqlog");
			$dangqianshijian = strtotime($show_date);

			foreach ($deviceLists as $key => $value) {
				# code...
				$deviceId = $value['id'];
				$deviceLists[$key]['yyBy'] = "";
				// 查询预约表中的所有记录
				$allYy = $modePzLog -> where("yiid = '$deviceId'") -> select();
				// var_dump($allYy);
				// 将当前时间转化为时间戳格式
				for ($i = 0; $i < count($allYy); $i++) {
					//将开始时间转化为时间戳的格
					$uname = "Admin";


					if ($deviceLists[$key]['status']==0) {//空置开放
						if ($allYy[$i]['username'] == $uname) {
							//比较log记录中的同一人 同一设备的时间来确定状态
							$ks = strtotime($allYy[$i]['kssj']);
							$js = strtotime($allYy[$i]['jshj']);

							if ($dangqianshijian >= $ks && $dangqianshijian <= $js) {
								$deviceLists[$key]['status'] = 2;
							}
						}else {
							//比较log记录中的不同人 同一设备的时间来确定状态
							$ks = strtotime($allYy[$i]['kssj']);
							$js = strtotime($allYy[$i]['jshj']);
							if ($dangqianshijian >= $ks && $dangqianshijian <= $js) {
								$deviceLists[$key]['status'] = 3;
							}
						}
					}
				}
			}
			return $deviceLists;
		}
		// 修改仪器设备的信息
		public function modifyEquipment($value, $argument) {
			$model = M("Equipment");
			return $model -> where("id = $value") -> save($argument);
		}
		// 删除一条仪器设备的信息
		public function deleteEquipment($value) {
			$model = M("Equipment");
			return $model -> where("id = $value") -> delete();
		}

		// 添加一个仪器设备
		public function addOneEquipment($array) {
			$model = M("Equipment");
			return $model -> add($array);
		}
	}