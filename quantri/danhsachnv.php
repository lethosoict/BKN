<?php
	ob_start();
	$sqli = "SELECT * FROM nguoidung WHERE TT>1 ORDER BY MaNguoiDung ASC";
	$querry = mysqli_query($con, $sqli);
	
	include_once 'corepages/danhsach.php';
	
	$page = new ConstructPage();

	$page->getbarname('Danh sách người sửa lỗi');
	$page->getButton_href('themnv');
	$page->getButton_name('Thêm mới người sửa');
	$page->getRowName(array('Mã người dùng','tên người dùng','username','password','Mã PQ','phân quyền'));
	$page->getRowWidth(array(15,30,10,10,10,20));

	$page->Issue1();
?>
                
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
		
	$page->Issue2();
	?>


