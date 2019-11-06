<?php
    include_once 'phpclass/error.php';
	
	$idnsp = $_GET['idnsp'];
	
	$sqli_nsp = "SELECT * FROM nhomsanpham WHERE TT = '$idnsp'";
	$querry_nsp = mysqli_query($con, $sqli_nsp);
	$row = mysqli_fetch_array($querry_nsp);

	if(isset($_POST['submit'])){
	$submit_ten_nsp = new GetSubmit($_POST['ten_nsp'], '');
	$submit_ma_nsp = new GetSubmit($_POST['ma_nsp'], '');
	$submit_mota_nsp = new GetSubmit($_POST['mota_nsp'], '');
	
	if(isset($submit_ten_nsp->submit) &&
	   isset($submit_ma_nsp->submit) &&
	   isset($submit_mota_nsp->submit)
	){
		// Insert into Database
		$sqli_update_nhomsp = " UPDATE nhomsanpham SET
							TenNhomSP = '$submit_ten_nsp->submit',
							MaNhomSP = '$submit_ma_nsp->submit',
							MoTa = '$submit_mota_nsp->submit'
							WHERE TT = '$idnsp'	
		";
		$querry_update_nsp = mysqli_query($con, $sqli_update_nhomsp);
		header('location: quantri.php?page_layout=danhsachnhomsp');
		
		}
	}
    
?>

<link rel="stylesheet" type="text/css" href="css/themnv.css" />

<h2>Thay đổi thông tin nhóm sản phẩm</h2>
	<div id="main">
        	<form method="post" enctype="multipart/form-data">
                <table id="add-prd" border="0" cellpadding="0" cellspacing="0">
                    <tr>
                        <td><label>Tên nhóm sản phẩm</label><br /><input type="text" name="ten_nsp" value="<?php echo $row['TenNhomSP'] ?>" />
                        	<?php if(isset($submit_ten_nsp->error)) echo $submit_ten_nsp->error ?>
                        </td>
                    </tr>

                                     
                    <tr>
                        <td><label>Mã nhóm sản phẩm</label><br /><input type="text" name="ma_nsp" value="<?php echo $row['MaNhomSP'] ?>" />
                        	<?php if(isset($submit_ma_nsp->error)) echo $submit_ma_nsp->error ?>
                        </td>
                    </tr>

                    <tr>
                        <td><label>Mô tả tóm tắt nhóm sản phẩm</label><br /><textarea cols="60" rows="12" id="mota_nsp" name="mota_nsp"><?php echo $row['MoTa'] ?></textarea>
                        	<?php if(isset($submit_mota_nsp->error)) echo $submit_mota_nsp->error ?>
                        </td>
                    </tr>
                    <tr>
                        <td><input type="submit" name="submit" value="Cập nhật" /> <input type="reset" name="reset" value="Làm mới" /></td>
                    </tr>
                </table>
            </form>
    </div>