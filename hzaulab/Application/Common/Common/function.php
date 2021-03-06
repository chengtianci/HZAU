<?php

	// 进行文件转换，将office等文件转化为pdf格式
	function tranOffice($input_file,$type="pdf"){
	    // 首先设置文件的编码
	    $input_file=iconv("utf-8", "gb2312", $input_file);
	    $out_file=substr($input_file, 0,strrpos($input_file, "."));
	    if($type!=="pdf")    
	        $out_file=$out_file.'.html';
	    else 
	        $out_file=$out_file.'.pdf';
	    $file="java -jar ./ThinkPHP/Library/Vendor/jodconverter-2.2.2/lib/jodconverter-cli-2.2.2.jar "."./"."$input_file"." ./"."$out_file";  
	    // 调用系统命令
	    $status=exec($file);
	}

	// 弹出提示信息
	function alertMessage($message) {
	    echo "<script>alert(\"$message\"); window.location.href=document.referrer; </script>";
	    exit();
	}

	// 获取本页面的id
	function getValue() {
	    if (is_numeric($_GET['id']) && is_int($_GET['id']+0)) {
	        return $_GET['id'];
	    } else {
	        return 0;
	    }
	}

	// 获得POST方式的传值，并且判断是否为空
	function getPost($value='') {
		foreach ($_POST as $key => $value) {
			# code...
			if ($value == "") {
				alertMessage("请填写完整的信息");
			}
		}
		return $_POST;
	}

	
	/**
	 * Excel表格导出
	 * @param $data 导出表格数据
	 * @param $title    导出表格名称
	 * @param $subject  导出表格字段
	 */
	function exportExcel($data,$title,$subject){  
	    Vendor("Excel.Util.PHPExcel");
	    Vendor('Excel.PHPExcel.IOFactory');
	    Vendor('Excel.PHPExcel.Reader.Excel5');
	    // Create new PHPExcel object  
	    $objPHPExcel = new PHPExcel();  
	    // Set properties  
	    $objPHPExcel->getProperties()->setCreator("ctos")  
	        ->setLastModifiedBy("ctos")  
	        ->setTitle("Office 2007 XLSX Test Document")  
	        ->setSubject("Office 2007 XLSX Test Document")  
	        ->setDescription("Test document for Office 2007 XLSX, generated using PHP classes.")  
	        ->setKeywords("office 2007 openxml php")  
	        ->setCategory("Test result file");  
	    $length1=array('A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z','AA','AB','AC','AD');
	    $length2=array('A1','B1','C1','D1','E1','F1','G1','H1','I1','J1','K1','L1','M1','N1','O1','P1','Q1','R1','S1','T1','U1','V1','W1','X1','Y1','Z1','AA1','AB1','AC1','AD1');
	    //set width  
	    for($a=0;$a<count($title);$a++){
	         $objPHPExcel->getActiveSheet()->getColumnDimension($length1[$a])->setWidth(20); 
	    }
	    //set font size bold  
	    $objPHPExcel->getActiveSheet()->getDefaultStyle()->getFont()->setSize(10);  
	    $objPHPExcel->getActiveSheet()->getStyle($length2[0].':'.$length2[count($title)-1])->getFont()->setBold(true); 
	    $objPHPExcel->getActiveSheet()->getStyle($length2[0].':'.$length2[count($title)-1])->getFont()->setBold(true);    
	    $objPHPExcel->getActiveSheet()->getStyle($length2[0].':'.$length2[count($title)-1])->getBorders()->getAllBorders()->setBorderStyle(PHPExcel_Style_Border::BORDER_THIN);  
	    
	    // set table header content  
	    for($a=0;$a<count($title);$a++){
	          $objPHPExcel->setActiveSheetIndex(0)->setCellValue($length2[$a], $title[$a]); 
	    }
	    for($i=0;$i<count($data);$i++){ 
	        $buffer=$data[$i];
	        $number=0;
	        foreach ($buffer as $value) {
	            $objPHPExcel->getActiveSheet(0)->setCellValueExplicit($length1[$number].($i+2),$value,PHPExcel_Cell_DataType::TYPE_STRING);//设置单元格为文本格式
	            $number++;
	        }
	        unset($value);
	        $objPHPExcel->getActiveSheet()->getStyle($length1[0].($i+2).':'.$length1[$number-1].($i+2))->getAlignment()->setVertical(PHPExcel_Style_Alignment::VERTICAL_CENTER);  
	        $objPHPExcel->getActiveSheet()->getStyle($length1[0].($i+2).':'.$length1[$number-1].($i+2))->getBorders()->getAllBorders()->setBorderStyle(PHPExcel_Style_Border::BORDER_THIN);  
	        $objPHPExcel->getActiveSheet()->getRowDimension($i+2)->setRowHeight(16);  
	    }  
	    // Set active sheet index to the first sheet, so Excel opens this as the first sheet  
	    $objPHPExcel->setActiveSheetIndex(0);  
	    ob_end_clean();//清除缓冲区,避免乱码
	    // Redirect output to a client’s web browser (Excel5)  
	    header('Content-Type: application/vnd.ms-excel');  
	    header('Content-Disposition: attachment;filename='.$subject.'('.date('Y-m-d').').xls');  
	    header('Cache-Control: max-age=0');  
	    $objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel5');  
	    $objWriter->save('php://output');  
	}