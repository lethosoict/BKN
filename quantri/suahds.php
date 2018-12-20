<?php
include_once 'phpclass/error.php';

$idhds = $_GET['idhds'];
$sqli_hds = "SELECT * FROM hanhdongsua WHERE TT = '$idhds'";
$querry_hds = mysqli_query($con, $sqli_hds);
$row = mysqli_fetch_array($querry_hds);

if(isset($_POST['submit'])){
	$submit_ten_hd = new GetSubmit($_POST['ten_hd'], '');
	$submit_ma_hd = new GetSubmit($_POST['ma_hd'], '');
	$submit_mota_hd = new GetSubmit($_POST['mota_hd'], '');
	
	if(isset($submit_ten_hd->submit) &&
	   isset($submit_ma_hd->submit) &&
	   isset($submit_mota_hd->submit)
	){
		// Insert into Database
		$sqli_update_hds = "UPDATE hanhdongsua SET
							MaHanhDongSua = '$submit_ma_hd->submit',
							TenHanhDongSua = '$submit_ten_hd->submit',
							MoTa = '$submit_mota_hd->submit'
							WHERE TT = '$idhds'";
							
		$querry_update_hds = mysqli_query($con, $sqli_update_hds);
		header('location: quantri.php?page_layout=hanhdongsua');
	}
}

?>

<link rel="stylesheet" type="text/css" href="css/themnv.css" />

        <h2>Thay đổi thông tin hành động sửa</h2>
		<div id="main">
        	<form method="post" enctype="multipart/form-data">
                <table id="add-prd" border="0" cellpadding="0" cellspacing="0">
                    <tr>
                        <td><label>Tên hành động</label><br /><input type="text" name="ten_hd" value="<?php echo $row['TenHanhDongSua'] ?>" />
                        	<?php if(isset($submit_ten_hd->error)) echo $submit_ten_hd->error ?>
                        </td>
                    </tr>

                                     
                    <tr>
                        <td><label>Mã hành động</label><br /><input type="text" name="ma_hd" value="<?php echo $row['MaHanhDongSua'] ?>" />
                        	<?php if(isset($submit_ma_hd->error)) echo $submit_ma_hd->error ?>
                        </td>
                    </tr>

                    <tr>
                        <td><label>Mô tả hành động</label><br /><textarea cols="60" rows="12" id="mota_hd" name="mota_hd"> <?php echo $row['MoTa'] ?> </textarea>
                        	<?php if(isset($submit_mota_hd->error)) echo $submit_mota_hd->error ?>
                        </td>
                    </tr>
                    <tr>
                        <td><input type="submit" name="submit" value="Cập nhật" /> <input type="reset" name="reset" value="Làm mới" /></td>
                    </tr>
                </table>
            </form>
    	</div>