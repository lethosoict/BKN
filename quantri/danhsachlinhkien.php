
<?php
include_once 'corepages/danhsach.php';

ob_start();
$sqli = "SELECT * FROM linhkien ORDER BY MaLK ASC";
$querry = mysqli_query($con, $sqli); 

$page = new ConstructPage();

$page->getbarname('Danh sách linh kiện');
$page->getButton_href('themlinhkien');
$page->getButton_name('Thêm mới linh kiện');
$page->getRowName(array('tên linh kiện', 'mã linh kiện','mô tả'));
$page->getRowWidth(array(50,10,35));

$page->Issue1();
?>

<?php
	while($row = mysqli_fetch_array($querry)){
?>

                <tr>
                	<td><span><?php echo $row['TT'] ?></span></td>
                    <td class="l5"><a><?php echo $row['MaLK'] ?></a></td>
                    <td class="l5"><span class="price"><?php echo $row['TenLK'] ?></span></td>
                    <td><span class="thumb"><?php echo $row['MoTa'] ?></span></td>
                    <td><a href="?page_layout=sualk&idlk=<?php echo $row['TT'] ?>"><span>Sửa</span></a></td>
                    <td><a href="#"><span>Xóa</span></a></td>
                </tr>
<?php
}
?>
<?php
$page->Issue2();
?>
