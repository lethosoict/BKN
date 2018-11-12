<?php
	$authen = array(
	//	'Post Admin' => 5,
		'Admin' => 3,
		'Supervisor' => 2,
		'Normal User' => 1,
	);
	
	$id_tv = $_GET['id_tv'];
	
	$sqli_Tv = "SELECT * FROM nguoidung WHERE TT = '$id_tv'";
	$querry_Tv = mysqli_query($con, $sqli_Tv);
	$row = mysqli_fetch_array($querry_Tv);
	
	// Check error
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
		
		// Update 
		if(isset($ten_tv) && isset($pq_tv) && isset($mpq_tv) && isset($ma_tv) && isset($username) && isset($password)){
			$sqli_update_tv = "UPDATE nguoidung SET 
					MaNguoidung ='$ma_tv', TenNguoiDung ='$ten_tv', username ='$username', 
					password = '$password', MaPhanQuyen = '$mpq_tv', PhanQuyen = '$pq_tv' 
					WHERE TT = '$id_tv' ";
					
			$querry_update_tv = mysqli_query($con, $sqli_update_tv);
			
			header('location: quantri.php?page_layout=danhsachnv');
		} 
		
	}
	
?>


<link rel="stylesheet" type="text/css" href="css/suanv.css" />

        <h2>Thay đổi thông tin người dùng</h2>
		<div id="main">
        	<form method="post" enctype="multipart/form-data">
        	<table id="add-prd" border="0" cellpadding="0" cellspacing="0">
            	<tr>
                	<td><label>Tên người dùng</label><br /><input type="text" name="ten_tv" value="<?php echo $row['TenNguoiDung'] ?>" /> <?php if(isset($error_ten_tv)) echo $error_ten_tv ?></td>
                </tr>


                <!-- Not require at this time
                <tr>
                	<td><label>Job Title</label><br /><input type="file" name="anh_sp" /></td>
                </tr>
                -->


                <tr>
                	<td><label>Phân quyền</label><br />
                    	<select name="id_pq">
                            <!--<option value="unselect">unselect</option>-->                           
                            <option value="Admin">Admin</option>
                            <option value="Supervisor">Supervisor</option>
                            <option value="Normal User">Normal User</option>
                        </select>	
                    </td>
                </tr>
                <tr>
                        <td><label>Mã người dùng</label><br /><input type="text" name="ma_tv" value="<?php echo $row['MaNguoiDung'] ?>" /> <?php if(isset($error_ma_tv)) echo $error_ma_tv ?></td>
                </tr>
                
                <tr>
                        <td><label>username</label><br /><input type="text" name="username" value="<?php echo $row['username'] ?>" /> <?php if(isset($error_username)) echo $error_username ?> </td>
                </tr>
                
                <tr>
                        <td><label>password</label><br /><input type="text" name="password" value="<?php echo $row['password'] ?>" /> <?php if(isset($error_password)) echo $error_password ?> </td>
                    </tr>

                <!--
                <tr>
                                <td><label>Gender</label><br />Male <input type="radio" name="gender" value=1 /> Female <input type="radio" name="gender" value=0 /></td>
                                </tr>
                                <tr>
                                <td><label>Mô tả tóm tắt</label><br /><textarea cols="60" rows="12" name="chi_tiet_sp">Nhân viên nhà máy</textarea></td>
                </tr>-->
                
                <tr>
                	<td><input type="submit" name="submit" value="Cập nhật" /> <input type="reset" name="reset" value="làm mới" /></td>
                </tr>
            </table>
            </form>
    	</div>
