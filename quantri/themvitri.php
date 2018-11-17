<?php
include_once 'phpclass/error.php';

if(isset($_POST['submit'])){
	$submit_ten_vt = new GetSubmit($_POST['ten_vt'], '');
	$submit_ma_vt = new GetSubmit($_POST['ma_vt'], '');
	$submit_mota_vt = new GetSubmit($_POST['mota_vt'], '');
	
	if(isset($submit_ten_vt->error) &&
	   isset($submit_ma_vt->error) &&
	   isset($submit_mota_vt->error)
	){
		// Insert into Database
	}
}

?>

<link rel="stylesheet" type="text/css" href="css/themnv.css" />

        <h2>Thêm vị trí mới</h2>
		<div id="main">
        	<form method="post" enctype="multipart/form-data">
                <table id="add-prd" border="0" cellpadding="0" cellspacing="0">
                    <tr>
                        <td><label>Tên vị trí</label><br /><input type="text" name="ten_vt" value="" />
                        	<?php if(isset($submit_ten_vt->error)) echo $submit_ten_vt->error ?>
                        </td>
                    </tr>

                                     
                    <tr>
                        <td><label>Mã vị trí</label><br /><input type="text" name="ma_vt" value="" />
                        	<?php if(isset($submit_ma_vt->error)) echo $submit_ma_vt->error ?>
                        </td>
                    </tr>

                    <tr>
                        <td><label>Mô tả tóm tắt</label><br /><textarea cols="60" rows="12" id="mota_vt" name="mota_vt"></textarea>
                        	<?php if(isset($submit_mota_vt->error)) echo $submit_mota_vt->error ?>
                        </td>
                    </tr>
                    <tr>
                        <td><input type="submit" name="submit" value="Cập nhật" /> <input type="reset" name="reset" value="Làm mới" /></td>
                    </tr>
                </table>
            </form>
    	</div>