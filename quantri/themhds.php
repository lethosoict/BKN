<?php
include_once 'phpclass/error.php';

if(isset($_POST['submit'])){
	$submit_ten_hd = new GetSubmit($_POST['ten_hd'], '');
	$submit_ma_hd = new GetSubmit($_POST['ma_hd'], '');
	$submit_mota_hd = new GetSubmit($_POST['mota_hd'], '');
	
	if(isset($submit_ten_hd->error) &&
	   isset($submit_ma_hd->error) &&
	   isset($submit_mota_hd->error)
	){
		// Insert into Database
	}
}

?>

<link rel="stylesheet" type="text/css" href="css/themnv.css" />

        <h2>Thêm hành động sửa mới</h2>
		<div id="main">
        	<form method="post" enctype="multipart/form-data">
                <table id="add-prd" border="0" cellpadding="0" cellspacing="0">
                    <tr>
                        <td><label>Tên hành động</label><br /><input type="text" name="ten_hd" value="" />
                        	<?php if(isset($submit_ten_hd->error)) echo $submit_ten_hd->error ?>
                        </td>
                    </tr>

                                     
                    <tr>
                        <td><label>Mã hành động</label><br /><input type="text" name="ma_hd" value="" />
                        	<?php if(isset($submit_ma_hd->error)) echo $submit_ma_hd->error ?>
                        </td>
                    </tr>

                    <tr>
                        <td><label>Mô tả hành động</label><br /><textarea cols="60" rows="12" id="mota_hd" name="mota_hd"></textarea>
                        	<?php if(isset($submit_mota_hd->error)) echo $submit_mota_hd->error ?>
                        </td>
                    </tr>
                    <tr>
                        <td><input type="submit" name="submit" value="Cập nhật" /> <input type="reset" name="reset" value="Làm mới" /></td>
                    </tr>
                </table>
            </form>
    	</div>