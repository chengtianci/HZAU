<?php
	namespace Home\Model;
	use Think\Model\RelationModel;
	class PzModel extends RelationModel {
		// 获取所有的盆栽信息
		public function getAllPz($value='')
		{
			# code...
			// $show_date 表示当前的时间
			$show_date=date('Y-m-d');
			$modePz = M("Pz");
			$deviceLists = $modePz -> order('id desc') -> select();

			// 查询盆栽设备的预约表
			// 条件为当前时间 $show-date在预约表中的starttime和endtime之间
			$modePzLog = M("Log");
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
}