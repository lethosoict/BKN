<?php
	include_once 'phpclass/error.php';
	$idvta = $_GET['idvt'];
	$sqli_vta = "SELECT * FROM vitrilinhkien WHERE TT = '$idvta'";
	$querry_vta = mysqli_query($con, $sqli_vta);
	$row = mysqli_fetch_array($querry_vta);
	

if(isset($_POST['submit'])){
	$submit_ten_vt = new GetSubmit($_POST['ten_vt'], '');
	$submit_ma_vt = new GetSubmit($_POST['ma_vt'], '');
	$submit_mota_vt = new GetSubmit($_POST['mota_vt'], '');
	
	if(
	   isset($submit_ma_vt->submit)&&
	   isset($submit_ten_vt->submit)&&
	   isset($submit_mota_vt->submit)
	){
		// Insert into Database
		
		$sqli_update_vta = "UPDATE vitrilinhkien SET 
							 MaViTri = '$submit_ma_vt->submit',
							 TenViTri = '$submit_ten_vt->submit',
							 moTa = '$submit_mota_vt->submit'
							 WHERE TT = '$idvta' ";
				
		 $querry_update_vta = mysqli_query($con, $sqli_update_vta);
 		
		header('location: quantri.php?page_layout=danhsachvitri');
	}
}

?>

<link rel="stylesheet" type="text/css" href="css/themnv.css" />

        <h2>Sửa thông tin vị trí</h2>
		<div id="main">
        	<form method="post" enctype="multipart/form-data">
                <table id="add-prd" border="0" cellpadding="0" cellspacing="0">
                    <tr>
                        <td><label>Tên vị trí</label><br /><input type="text" name="ten_vt" value="<?php echo $row['TenViTri'] ?>" />
                        	<?php if(isset($submit_ten_vt->error)) echo $submit_ten_vt->error ?>
                        </td>
                    </tr>

                                     
                    <tr>
                        <td><label>Mã vị trí</label><br /><input type="text" name="ma_vt" value="<?php echo $row['MaViTri'] ?>" />
                        	<?php if(isset($submit_ma_vt->error)) echo $submit_ma_vt->error ?>
                        </td>
                    </tr>

                    <tr>
                        <td><label>Mô tả tóm tắt</label><br /><textarea cols="60" rows="12" id="mota_vt" name="mota_vt"> <?php echo $row['moTa'] ?> </textarea>
                        	<?php if(isset($submit_mota_vt->error)) echo $submit_mota_vt->error ?>
                        </td>
                    </tr>
                    <tr>
                        <td><input type="submit" name="submit" value="Cập nhật" /> <input type="reset" name="reset" value="Làm mới" /></td>
                    </tr>
                </table>
            </form>
    	</div>