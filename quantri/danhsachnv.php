<?php
	ob_start();
	$sqli = "SELECT * FROM nguoidung WHERE TT>1 ORDER BY MaNguoiDung ASC";
	$querry = mysqli_query($con, $sqli);
?>

<link rel="stylesheet" type="text/css" href="css/danhsachnv.css" />

        <h2>Quản lý người dùng</h2>
		<div id="main">
        	<p id="add-prd"><a href="?page_layout=themnv"><span>Tạo người dùng mới</span></a></p>
        	<table id="prds" border="0" cellpadding="0" cellspacing="0" width="100%">
            	<tr id="prd-bar">
                	<td width="5%">TT</td>
                	<td width="15%">Mã người dùng</td>
                    <td width="30%">Tên người dùng</td>
                    <td width="10%">username</td>
                    <td width="10%">password</td>
                    <td width="10%">Mã PQ</td>
                    <td width="20%">Phân Quyền</td>
                    <td width="5%">Sửa</td>
                    <td width="5%">Xóa</td>
                </tr>
                
                <tr>
                	<td><span> 1 </span></td>
                	<td class="l5"><span class="price">00001</span></td>
                    <td class="l5"><a> Lê Thọ </a></td>
                    <td class="l5"><span class="price">letho</span></td>
                    <td class="l5">********</td>
                    <td><span class="thumb">5</span></td>
                    <td><span class="price">Post Admin</span></td>
                    <td><a><span>Sửa</span></a></td>
                    <td><a><span>Xóa</span></a></td>
                </tr>

	<?php
		while($row = mysqli_fetch_array($querry)){
	?>
                <tr>
                	<td><span> <?php echo $row['TT']; ?> </span></td>
                	<td class="l5"><span class="price"><?php echo $row['MaNguoiDung']; ?></span></td>
                    <td class="l5"><a> <?php echo $row['TenNguoiDung']; ?> </a></td>
                    <td class="l5"><span class="price"><?php echo $row['username']; ?></span></td>
                    <td class="l5"><?php echo $row['password']; ?></td>
                    <td><span class="thumb"><?php echo $row['MaPhanQuyen']; ?></span></td>
                    <td><span class="price"><?php echo $row['PhanQuyen']; ?></span></td>
                    <td><a href="?page_layout=suanv&id_tv=<?php echo $row['TT'] ?>"><span>Sửa</span></a></td>
                    <td><a href="#"><span>Xóa</span></a></td>
                </tr>
	<?php
	}
	?>
                <!--
                <tr>
                                    <td><span>02</span></td>
                                    <td class="l5"><a href="#">Nguyễn văn B</a></td>
                                    <td class="l5"><span class="price">25</span></td>
                                    <td class="l5">2</td>
                                    <td><span class="thumb">3C</span></td>
                                    <td><a href="#"><span>Sửa</span></a></td>
                                    <td><a href="#"><span>Xóa</span></a></td>
                                </tr>
                
                                <tr>
                                    <td><span>03</span></td>
                                    <td class="l5"><a href="#">Trần xuân C</a></td>
                                    <td class="l5"><span class="price">25</span></td>
                                    <td class="l5">2</td>
                                    <td><span class="thumb">3C</span></td>
                                    <td><a href="#"><span>Sửa</span></a></td>
                                    <td><a href="#"><span>Xóa</span></a></td>
                                </tr>
                
                                <tr>
                                    <td><span>04</span></td>
                                    <td class="l5"><a href="#">Đinh Văn G</a></td>
                                    <td class="l5"><span class="price">25</span></td>
                                    <td class="l5">3</td>
                                    <td><span class="thumb">3C</span></td>
                                    <td><a href="#"><span>Sửa</span></a></td>
                                    <td><a href="#"><span>Xóa</span></a></td>
                                </tr>-->
                

            </table>
            <p id="pagination"><span>1</span> <a href="#">2</a> <a href="#">3</a> <a href="#">4</a> <a href="#">5</a></p>
    	</div>
