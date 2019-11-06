<?php
	$authen = array(
		'Admin' => 3,
		'Supervisor' => 2,
		'Normal User' => 1,
	);
	
	$sqli_Tv = "SELECT * FROM nguoidung";
	$querry_Tv = mysqli_query($con, $sqli_Tv);
	
	if(isset($_POST['submit'])){
		if($_POST['ten_tv'] == ''){
			$error_ten_tv = '<span style = "color:red"> * </span>';
		}
		else{
			$ten_tv =$_POST['ten_tv'];
		}
		
		
		
		
		if($_POST['id_pq'] == 'unselect'){
					$error_pq_tv = '<span style = "color:red"> * </span>';
				}
				else{
					$pq_tv = $_POST['id_pq'];
					$mpq_tv = $authen[$pq_tv];
				}
		
		
		
		
		if($_POST['ma_tv'] == ''){
			$error_ma_tv = '<span style = "color:red"> * </span>';
		}
		else{
			$ma_tv = $_POST['ma_tv'];
		}
		
		
		if($_POST['username'] == ''){
			$error_username = '<span style = "color:red"> * </span>';
		}
		else{
			$username = $_POST['username'];
		}
		
		
		if($_POST['password'] == ''){
			$error_password = '<span style = "color:red"> * </span>';
		}
		else{
			$password = $_POST['password'];
		}
		
		
		// Insert to Database
		if(isset($ten_tv) && isset($pq_tv) && isset($mpq_tv) && isset($ma_tv) && isset($username) && isset($password)){
			$sqli_insert_tv = "INSERT INTO nguoidung (MaNguoiDung, TenNguoiDung, username, password, MaPhanQuyen, PhanQuyen) 
											  VALUES ('$ma_tv', '$ten_tv', '$username', '$password', '$mpq_tv', '$pq_tv')";
			$querry_insert_tv = mysqli_query($con, $sqli_insert_tv);
			
			header('location: quantri.php?page_layout=danhsachnv');											  
		}
	}
	
?>


<link rel="stylesheet" type="text/css" href="css/themnv.css" />

        <h2>Thêm mới người dùng</h2>
		<div id="main">
        	<form method="post" enctype="multipart/form-data">
                <table id="add-prd" border="0" cellpadding="0" cellspacing="0">
                    <tr>
                        <td><label>Tên người dùng</label><br /><input type="text" name="ten_tv" value="" /> <?php if(isset($error_ten_tv)) echo $error_ten_tv ?></td> 
                    </tr>


                    <!-- Not require at this time
                    <tr>
                        <td><label>Job Title</label><br /><input type="file" name="anh_sp" /></td>
                    </tr>
                    -->


                    <tr>
                        <td><label>Phân quyền</label><br />
                            <select name="id_pq">
                            	<option value="unselect">unselect</option>
                                <option value="Admin">Admin</option>
                                <option value="Supervisor">Supervisor</option>
                                <option value="Normal User">Normal User</option>
                            </select> <?php if(isset($error_pq_tv)) echo $error_pq_tv ?>
                        </td>
                    </tr>
                    <tr>
                        <td><label>Mã người dùng</label><br /><input type="text" name="ma_tv" value="" /> <?php if(isset($error_ma_tv)) echo $error_ma_tv ?></td>
                    </tr>
                   
                   
                    <tr>
                        <td><label>username</label><br /><input type="text" name="username" value="" /> <?php if(isset($error_username)) echo $error_username ?> </td>
                    </tr>
                   
                    
                    <tr>
                        <td><label>password</label><br /><input type="text" name="password" value="" /> <?php if(isset($error_password)) echo $error_password ?> </td>
                    </tr>

                    <!--
                    <tr>
                       <td><label>Gender</label><br />Male <input type="radio" name="gender" value=1 /> Female <input type="radio" name="gender" value=0 /></td>
                    </tr>-->
                    
                    <!--
                    <tr>
                                            <td><label>Mô tả tóm tắt</label><br /><textarea cols="60" rows="12" name="mota_tv"> </textarea></td>
                                        </tr>-->
                    
                    <tr>
                        <td><input type="submit" name="submit" value="Cập nhật" /> <input type="reset" name="reset" value="Làm mới" /></td>
                    </tr>
                </table>
            </form>
    	</div>
