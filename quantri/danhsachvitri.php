<?php
include_once 'corepages/danhsach.php';
ob_start();
$sqli = "SELECT * FROM vitrilinhkien ORDER BY TT ASC";
$querry = mysqli_query($con, $sqli);


$page = new ConstructPage();

$page->getbarname('Danh sách vị trí linh kiện');
$page->getButton_href('themvitri');
$page->getButton_name('Thêm vị trí mới');
$page->getRowName(array('tên vị trí', 'mã vị trí','mô tả'));
$page->getRowWidth(array(50,10,35));

$page->Issue1();
?>
<?php
while($row = mysqli_fetch_array($querry)){
?>
                <tr>
                	<td><span><?php echo $row['TT'] ?></span></td>
                    <td class="l5"><a href="#"><?php echo $row['TenViTri'] ?></a></td>
                    <td class="l5"><span class="price"> <?php echo $row['MaViTri'] ?> </span></td>
                    <td><span class="thumb"><?php echo $row['moTa'] ?></span></td>
                    <td><a href="?page_layout=suavitri&idvt=<?php echo $row['TT']?>"><span>Sửa</span></a></td>
                    <td><a><span>Xóa</span></a></td>
                </tr>
                
<?php
}
?>

<?php
$page->Issue2();
?>

