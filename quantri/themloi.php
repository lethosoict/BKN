<?php
include_once 'phpclass/error.php';

if(isset($_POST['submit'])){
	$submit_ten_nl = new GetSubmit($_POST['ten_nl'], '');
	$submit_ma_nl = new GetSubmit($_POST['ma_nl'], '');
	$submit_mota_nl = new GetSubmit($_POST['mota_nl'], '');
	
	if(isset($submit_ten_nl->submit) &&
	   isset($submit_ma_nl->submit) &&
	   isset($submit_mota_nl->submit)
	){
		// Insert into Database
		$sqli_insert_nl = "INSERT INTO nhomloi (MaNhomLoi, TenNhomLoi, MoTa) 
										VALUES ('$submit_ma_nl->submit','$submit_ten_nl->submit','$submit_mota_nl->submit')";
		$querry_insert_nl = mysqli_query($con, $sqli_insert_nl);
		header('location: quantri.php?page_layout=danhsachnhomloi');
	}
}

?>

<link rel="stylesheet" type="text/css" href="css/themnv.css" />

        <h2>Thêm nhóm lỗi mới</h2>
		<div id="main">
        	<form method="post" enctype="multipart/form-data">
                <table id="add-prd" border="0" cellpadding="0" cellspacing="0">
                    <tr>
                        <td><label>Tên nhóm lỗi</label><br /><input type="text" name="ten_nl" value="" />
                        	<?php if(isset($submit_ten_nl->error)) echo $submit_ten_nl->error ?>
                        </td>
                    </tr>

                                     
                    <tr>
                        <td><label>Mã nhóm lỗi</label><br /><input type="text" name="ma_nl" value="" />
                        	<?php if(isset($submit_ma_nl->error)) echo $submit_ma_nl->error ?>
                        </td>
                    </tr>

                    <tr>
                        <td><label>Mô tả tóm tắt nhóm lỗi</label><br /><textarea cols="60" rows="12" id="mota_nl" name="mota_nl"></textarea>
                        	<?php if(isset($submit_mota_nl->error)) echo $submit_mota_nl->error ?>
                        </td>
                    </tr>
                    <tr>
                        <td><input type="submit" name="submit" value="Cập nhật" /> <input type="reset" name="reset" value="Làm mới" /></td>
                    </tr>
                </table>
            </form>
    	</div>