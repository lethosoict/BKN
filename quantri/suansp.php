<?php
    
?>

<link rel="stylesheet" type="text/css" href="css/themnv.css" />

<h2>Thay đổi thông tin nhóm sản phẩm</h2>
	<div id="main">
        	<form method="post" enctype="multipart/form-data">
                <table id="add-prd" border="0" cellpadding="0" cellspacing="0">
                    <tr>
                        <td><label>Tên nhóm sản phẩm</label><br /><input type="text" name="ten_nsp" value="" />
                        	<?php if(isset($submit_ten_nsp->error)) echo $submit_ten_nsp->error ?>
                        </td>
                    </tr>

                                     
                    <tr>
                        <td><label>Mã nhóm sản phẩm</label><br /><input type="text" name="ma_nsp" value="" />
                        	<?php if(isset($submit_ma_nsp->error)) echo $submit_ma_nsp->error ?>
                        </td>
                    </tr>

                    <tr>
                        <td><label>Mô tả tóm tắt nhóm sản phẩm</label><br /><textarea cols="60" rows="12" id="mota_nsp" name="mota_nsp"></textarea>
                        	<?php if(isset($submit_mota_nsp->error)) echo $submit_mota_nsp->error ?>
                        </td>
                    </tr>
                    <tr>
                        <td><input type="submit" name="submit" value="Cập nhật" /> <input type="reset" name="reset" value="Làm mới" /></td>
                    </tr>
                </table>
            </form>
    </div>