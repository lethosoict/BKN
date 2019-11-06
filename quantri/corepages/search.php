<?php
    include_once '../ketnoi.php';
	
	if(isset($_POST['search'])){
		$searchq = $_POST['search'];
		$searchq = preg_replace("#[^0-9a-z]#i", "", $searchq);
		$querry = mysqli_query($con, "SELECT * FROM nguoidung WHERE TenNguoiDung LIKE '%$searchq%'") or die("Could not search");
		
	}
	
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Search Database</title>
<link rel="stylesheet" type="text/css" href="css/quantri.css" />
</head>
<body>
	<form action="" method="post">
		<input type="text" name="search" placeholder="Search key"/>
		<input type="submit" value=">>" />
	</form>
	<?php
		$count = mysqli_num_rows($querry);
		echo $count;
		if($count == 0){
			$output = 'there were no search';
		}
		else{
			while($row = mysqli_fetch_array($querry)){
				$ten = $row['TenNguoiDung'];
				echo "<h1>$ten</h1>";
			}
		}
	?>
	
	
</body>
</html>