<?php
include_once 'phpclass/error.php';

if(isset($_POST['submit'])){
	$submit_ten_lk = new GetSubmit($_POST['ten_lk'], '');
	$submit_ma_lk = new GetSubmit($_POST['ma_lk'], '');
	$submit_mota_lk = new GetSubmit($_POST['mota_lk'], '');
	
	if(isset($submit_ten_lk->error) &&
	   isset($submit_ma_lk->error) &&
	   isset($submit_mota_lk->error)
	){
		// Insert into Database
	}
}

?>

<link rel="stylesheet" type="text/css" href="css/themnv.css" />

        <h2>Thêm mới linh kiện</h2>
		<div id="main">
        	<form method="post" enctype="multipart/form-data">
                <table id="add-prd" border="0" cellpadding="0" cellspacing="0">
                    <tr>
                        <td><label>Tên linh kiện</label><br /><input type="text" name="ten_lk" value="" />
                        	<?php if(isset($submit_ten_lk->error)) echo $submit_ten_lk->error ?>
                        </td>
                    </tr>

                                     
                    <tr>
                        <td><label>Mã linh kiện</label><br /><input type="text" name="ma_lk" value="" />
                        	<?php if(isset($submit_ma_lk->error)) echo $submit_ma_lk->error ?>
                        </td>
                    </tr>

                    <tr>
                        <td><label>Mô tả tóm tắt</label><br /><textarea cols="60" rows="12" id="mota_lk" name="mota_lk"></textarea>
                        	<?php if(isset($submit_mota_lk->error)) echo $submit_mota_lk->error ?>
                        </td>
                    </tr>
                    <tr>
                        <td><input type="submit" name="submit" value="Cập nhật" /> <input type="reset" name="reset" value="Làm mới" /></td>
                    </tr>
                </table>
            </form>
    	</div>