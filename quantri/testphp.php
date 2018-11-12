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
	
	$arr = array(
		'bar of goal' => 1,
		'flar' => 5,
		'gour' => 3,		
	);
	
	$kq	= $arr['flar'] + $arr['gour'] - $arr['bar of goal'];
	
	echo $kq;
	
?>