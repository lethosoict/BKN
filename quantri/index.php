<?php
   ob_start();
   session_start();
   include_once 'ketnoi.php';
   
   if(isset($_SESSION['tk'])) header('location: quantri.php'); else{

?>


    
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Database</title>
<link rel="icon" type="image/png" href="anh/barlogo.png" />
<link rel="stylesheet" type="text/css" href="css/dangnhap.css" />
</head>
<body>
	
<?php
	if(isset($_POST['submit'])){
		if($_POST['tk'] == ''){
			$error = 'Full fill user and password';
		}
		else{
			$tk=$_POST['tk'];
		}
		
		if($_POST['mk'] == ''){
			$error = 'Full fill user and password';
		}
		else{
			$mk=$_POST['mk'];
		}
		
		
		if(isset($tk) && isset($mk)){
			$sqli = "SELECT * FROM nguoidung WHERE username = '$tk' AND password = '$mk'";
			$querry = mysqli_query($con, $sqli);
			$rows = mysqli_num_rows($querry);
			
			if($rows <=0){
				$error = 'user or password wrong!';
			}
			else{
				$_SESSION['tk'] = $tk;
				$_SESSION['mk'] = $mk;
				header ('location:quantri.php');
			}
		}
	}
	
?>	
	
<form method="post">
<div id="form-login">
	<!-- <h2>Đăng nhập hệ thống<span> error</span></h2> -->
	<?php
		if(isset($error))
			echo "<h2><span>".$error."</span></h2>";
		else 
			echo "<h2>Đăng nhập hệ thống</h2>"
	?>
	
	
    <ul>
        <li><label>Người dùng</label><input type="text" name="tk" /></li>
        <li><label>Mật khẩu</label><input type="password" name="mk" /></li>
        <li><label>Ghi nhớ</label><input type="checkbox" name="check" checked="checked" /></li>
        <li><input type="submit" name="submit" value="Sign In" /> <input type="reset" name="resset" value="Refresh" /></li>
    </ul>
</div>
</form>
</body>
</html>

<?php
}
?>
