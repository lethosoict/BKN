
<link rel="stylesheet" type="text/css" href="css/themnv.css" />

        <h2>Thêm mới nhóm sản phẩm</h2>
		<div id="main">
        	<form method="post" enctype="multipart/form-data">
                <table id="add-prd" border="0" cellpadding="0" cellspacing="0">
                    <tr>
                        <td><label>Tên nhóm sản phẩm</label><br /><input type="text" name="ten_sp" value="" /></td>
                    </tr>


                    <!-- Not require at this time
                    <tr>
                        <td><label>Job Title</label><br /><input type="file" name="anh_sp" /></td>
                    </tr>
                    -->


                    <!-- <tr>
                        <td><label>Chức danh</label><br />
                            <select name="id_dm">
                                <option value=1>Technical</option>
                                <option value=1>Operator SMT</option>
                                <option value=1>Operator ASM</option>
                                <option value=1>Quality Engineer</option>
                                <option value=1>Process Engineer</option>
                                <option value=1>Manager</option>
                            </select>
                        </td>
                    </tr> -->
                    
                    
                    <tr>
                        <td><label>Mã nhóm sản phẳm</label><br /><input type="text" name="name" value="" /></td>
                    </tr>
                    <!-- <tr>
                        <td><label>Phân quyền</label><br /><input type="text" name="age" value=""/> </td>
                    </tr>
                    <tr>
                        <td><label>Bậc tay nghề</label><br /><input type="text" name="lvA" value="" /></td>
                    </tr> -->

                    <!-- <tr>
                        <td><label>Gender</label><br />Male <input type="radio" name="gender" value=1 /> Female <input type="radio" name="gender" value=0 /></td>
                    </tr> -->
                    <tr>
                        <td><label>Mô tả tóm tắt nhóm sản phẳm</label><br /><textarea cols="60" rows="12" name="chi_tiet_sp"> </textarea></td>
                    </tr>
                    <tr>
                        <td><input type="submit" name="submit" value="Cập nhật" /> <input type="reset" name="reset" value="Làm mới" /></td>
                    </tr>
                </table>
            </form>
    	</div>
