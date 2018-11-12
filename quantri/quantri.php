

 <!-- * Created by PhpStorm.
 * User: Phoebus Gannicus
 * Date: 10/5/2018
 * Time: 9:06 PM -->
 
 <?php
 ob_start();
 session_start();
 include_once 'ketnoi.php';
 
 $tk = $_SESSION['tk'];
 $mk = $_SESSION['mk'];
 
 $sqli = "SELECT * FROM nguoidung WHERE username = '$tk' AND password = '$mk'";
 $querry = mysqli_query($con, $sqli);
 $rows = mysqli_num_rows($querry);
 
 $row = mysqli_fetch_array($querry);
 $mpq = $row['MaPhanQuyen'];
 $pq = $row['PhanQuyen']; 
 
 if($rows >0){
 ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Database System</title>
<link rel="stylesheet" type="text/css" href="css/quantri.css" />
</head>
<body>
<div id="wrapper">
	<div id="header">
    	<div id="navbar">
        	<ul>
            	<li id="admin-home"><a href="quantri.php">Giới thiệu</a></li>
                <li><a href="?page_layout=danhsachnv">Người dùng</a></li>
                <li><a href="?page_layout=danhsachnhomsp">Nhóm Sàn phẩm</a></li>
                <li><a href="#">Sản phẩm Nhận</a></li>
                <li><a href="#">Sản phẩm Sửa</a></li>
                <li><a href="?page_layout=danhsachlinhkien">Linh kiện</a></li>
                <!--<li><a target="_blank" href="#">Thêm mới</a></li>-->
            </ul>
            <div id="user-info">
            	<p>Xin chào <span><?php if(isset($_SESSION['tk'])){echo $pq.' '.$_SESSION['tk'];} ?></span> Đăng nhập hệ thống</p>
                <p><a href="dangxuat.php">Đăng xuất</a></p>
            </div>
        </div>
        <div id="banner">
        	<div id="logo"><a href="quantri.php"><img src="anh/logo.png" height="120" /></a></div>
        </div>
    </div>
    <div id="body">
        
    <?php
    //Master Page
    
    // switch ($_GET['page_layout']) {
        // case 'danhsachnhomsp': include_once ('danhsachnhomsp.php');          
            // break;
// 		
		// case 'danhsachnv': include_once ('danhsachnv.php');
			// break;
//         
        // default: include_once ('gioithieu.php');          
    // }   
//         
	if(isset ($_GET['page_layout']))
	{
		$page = $_GET['page_layout'];
		$paging = $page.'.php';
		include_once ($paging);
	}
	else
	{
		include_once ('gioithieu.php');
	}

	
	
    ?>
        
        
    </div>
    <div id="footer">
    	<div id="footer-info">
        	<h4> </h4>
            <p><span></span> Tầng 2, Nhà 5 tầng, 124 Hoàng Quốc Việt - Cầu Giấy - Hà Nội | <span>Phone:</span> 0914703890</p>
            <!--<p>Bản quyền thuộc ...</p>-->
        </div>
    </div>
</div>
</body>
</html>

<?php
}

else {
	header('location: index.php');
}
?>

