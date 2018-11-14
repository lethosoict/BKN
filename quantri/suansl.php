<?php
    include_once 'phpclass/error.php';
	
	/* Connect to Database
	$id_tv = $_GET['id_tv'];
		
		$sqli_Tv = "SELECT * FROM nguoidung WHERE TT = '$id_tv'";
		$querry_Tv = mysqli_query($con, $sqli_Tv);
		$row = mysqli_fetch_array($querry_Tv);
	 * */
	
	
	if(isset($_POST['submit'])){
		$submit_ten_nsl = new GetSubmit($_POST['ten_nsl'], '');
		$submit_ma_nsl = new GetSubmit($_POST['ma_nsl'], '');
		$submit_hoc_van = new GetSubmit($_POST['hoc_van'], 'unselect');
		$submit_tay_nghe = new GetSubmit($_POST['tay_nghe'], 'unselect');
		$submit_don_vi = new GetSubmit($_POST['don_vi'], 'unselect');
		$submit_ghi_chu = new GetSubmit($_POST['ghi_chu'], '');
		
		if(
			isset($submit_ten_nsl->submit) &&
			isset($submit_ma_nsl->submit) &&
			isset($submit_hoc_van->submit) &&
			isset($submit_tay_nghe->submit) &&
			isset($submit_don_vi->submit) &&
			isset($submit_ghi_chu->submit)
		){
			echo "Availble all information...!!!";
		}
	}
?>

<link rel="stylesheet" type="text/css" href="css/suanv.css" />

        <h2>Thay đổi thông tin người sửa lỗi</h2>
		<div id="main">
        	<form method="post" enctype="multipart/form-data">
        	<table id="add-prd" border="0" cellpadding="0" cellspacing="0">
            	<tr>
                	<td><label>Tên người sửa</label><br /><input type="text" name="ten_nsl" value=""/> 
                		<?php if(isset($submit_ten_nsl->error)) echo $submit_ten_nsl->error ?>
                		</td>
                </tr>


                <!-- Not require at this time
                <tr>
                	<td><label>Job Title</label><br /><input type="file" name="anh_sp" /></td>
                </tr>
                -->
                
                <tr>
                        <td><label>Mã người sửa</label><br /><input type="text" name="ma_nsl" value="" />
                        <?php if(isset($submit_ma_nsl->error)) echo $submit_ma_nsl->error ?>	
                        </td>
                </tr>

				<tr>
                        <td><label>Học vấn</label><br />
                            <select name="hoc_van">
                            	<option value="unselect">unselect</option>
                                <option value="DH">Đại Học</option>
                                <option value="CD">Cao Đẳng</option>
                                <option value="TC">Trung Cấp</option>
                                <option value="PT">Phổ thông</option>
                            </select> <?php if(isset($submit_hoc_van->error)) echo $submit_ma_nsl->error ?>
                        </td>
                </tr>
                
                <tr>
                        <td><label>Tay Nghề</label><br />
                            <select name="tay_nghe">
                            	<option value="unselect">unselect</option>
                                <option value="B1">Bậc 1</option>
                                <option value="B2">Bậc 2</option>
                                <option value="B3">Bậc 3</option>
                                <option value="B4">Bậc 4</option>
                           	</select> <?php if(isset($submit_tay_nghe->error)) echo $submit_tay_nghe->error ?>
                        </td>
                </tr>
                
                <tr>
                        <td><label>Đơn vị</label><br />
                            <select name="don_vi">
                            	<option value="unselect">unselect</option>
                                <option value="NM1">Nhà máy 1</option>
                                <option value="VKX">VKX</option>
       						</select> <?php if(isset($submit_don_vi->error)) echo $submit_don_vi->error ?>
                            
                        </td>
                </tr>
                
                <tr>
                       <td><label>Ghi chú</label><br /><textarea cols="60" rows="12" id="ghi_chu" name="ghi_chu"></textarea>
                       	<?php if(isset($submit_ghi_chu->error)) echo $submit_ghi_chu->error ?>
                       </td>
                </tr>
                    
                <tr>
                       <td><label>Trạng Thái</label><br />Hoạt động <input type="radio" name="active" value= 1 /> Không Hoạt động <input type="radio" name="active" value=0 /></td>
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