<?php
include_once 'corepages/danhsach.php';

ob_start();
$sqli = "SELECT * FROM sanphamnhan ORDER BY TT ASC";
$querry = mysqli_query($con, $sqli);

$page = new ConstructPage();

$page->getbarname('Danh sách sản phẩm nhận');
$page->getButton_href('themspn');
$page->getButton_name('Thêm mới sản phẩm nhận');
$page->getRowName(array('Mã sản phẩm', 'Mã nhóm sản phẩm', 'Date nhận', 'Mã nhóm lỗi'));
$page->getRowWidth(array(20,20,20,25));

$page->Issue1();
?>

<?php 
	while($row = mysqli_fetch_array($querry)){
?>

                <tr>
                	<td><span><?php echo $row['TT'] ?></span></td>
                    <td class="l5"><a href="#"><?php echo $row['MaSP'] ?></a></td>
                    <td class="l5"><span class="price"><?php echo $row['MaNhomSP'] ?></span></td>
                    <td><span class="thumb"><?php echo $row['DateNhan'] ?></span></td>
                    <td class="l5"><span class="price"><?php echo $row['MaNhomLoi'] ?></span></td>
                    <td><a href="?page_layout=suanspn&idspn=<?php echo $row['TT']?>"><span>Sửa</span></a></td>
                    <td><a href="#"><span>Xóa</span></a></td>
                </tr>
                
<?php
	}
?>



<?php
$page->Issue2();
?>
