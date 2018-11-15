<?php
	/*
	$host = "localhost";
		$name = "root";
		$pass = "";
		$db = "dbwy";
		
		$conn = mysqli_connect($host, $name, $pass, $db);
		
		if(mysqli_connect_errno()){
			printf("Mysql connect has been lost %s", mysqli_connect_error());
		}
		else {
			printf("Database has been connected!!! </br>");
		}
		
		
		
		$sql = "SELECT * FROM nguoidung WHERE username = 'letho' AND password = 'Gannicus'";
		$mquerry = mysqli_query($conn, $sql);
		$row = mysqli_num_rows($mquerry);
		
		echo "Number of rows: ".$row;*/
	
/*
	$arr = array(
		'bar of goal' => 1,
		'flar' => 5,
		'gour' => 3,		
	);
	
	$kq	= $arr['flar'] + $arr['gour'] - $arr['bar of goal'];
	
	echo $kq;
	*/

	require_once 'classes/PHPExcel/IOFactory.php';
	
	// Load existing file excel and get values from cells 
	/*
	if(isset($_FILES['excelFile']) && !empty($_FILES['excelFile']['tmp_name'])){
			//var_dump($_FILES['excelFile']['tmp_name']);
			$excelObject = PHPExcel_IOFactory::load($_FILES['excelFile']['tmp_name']);
													 $getSheet = $excelObject->getActiveSheet()->toArray(null);
					
					echo '<pre>';
					echo json_encode($getSheet);
					echo var_dump($getSheet);  
					
			$workSheet = $excelObject->getSheet(0);
			$lastRow = $workSheet->getHighestRow();
			
			
			echo "<table>";
						for ($row = 1; $row <= $lastRow; $row++){
							echo "<tr><td>";
							echo $workSheet->getCell('A'.$row)->getValue()." ||";
							echo $workSheet->getCell('B'.$row)->getValue()." ||";
							echo $workSheet->getCell('C'.$row)->getValue();
							echo "</tr></td>";
						}
			echo "</table>";
	 }
	 */
	
	// Write value into excel file	 
	$value = "Marco Van Bastel";
	if(isset($_POST['submit'])){
		$phpExcel = new PHPExcel();
	$phpExcel->setActiveSheetIndex(0);
	
	// create header
	$phpExcel->getActiveSheet()->SetCellValue("A3", $value);
	
	// save file excel
	$objWrite =  new PHPExcel_Writer_Excel2007($phpExcel);
	$objWrite->save("the_file.xlsx");
	}
	
	
	
	
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Database</title>
<link rel="stylesheet" type="text/css" href="css/dangnhap.css" />
</head>
<body>
	<!--
	<form action="" method="post" enctype="multipart/form-data">
			<input type="file" name="excelFile" />
			<input type="submit" name="" value="submit" />
			<button type="button" onclick="alert('Hello world!')"> Warning</button>
		</form>
	-->
	
	<form method="post" enctype="multipart/form-data">
		<input type="submit" name="submit" value="cap nhat" />
	</form>
	
</body>
</html>