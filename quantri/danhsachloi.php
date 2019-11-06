<?php
include_once 'corepages/danhsach.php';

ob_start();
$sqli = "SELECT * FROM nhomloi ORDER by MaNhomLoi ASC";
$querry = mysqli_query($con, $sqli);

$page = new ConstructPage();

$page->getbarname('Danh sách lỗi');
$page->getButton_href('themloi');
$page->getButton_name('Thêm mới nhóm lỗi');
$page->getRowName (array("Tên nhóm lỗi", "Mã nhóm lỗi", "Mô tả lỗi"));
$page->getRowWidth(array(30,10,25));

$page->Issue1();
?>

<?php
while($row = mysqli_fetch_array($querry)){
?>
		<tr>
				<td><span><?php echo $row['TT'] ?></span></td>
				<td class='l5'><a> <?php echo $row['TenNhomLoi'] ?> </a></td>
				<td class='l5'><span class='price'><?php echo $row['MaNhomLoi'] ?></span></td>
				<td><span class='thumb'><?php echo $row['MoTa'] ?></span></td>
				<td><a href='?page_layout=suanl&idnl=<?php echo $row['TT']?>'><span>Sửa</span></a></td>
				<td><a href=''><span>Xóa</span></a></td>
		</tr>		
<?php
}
?>
		
<?php
$page->Issue2();
?>