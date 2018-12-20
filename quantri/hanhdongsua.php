<?php
include_once 'corepages/danhsach.php';
ob_start();
$sqli = "SELECT * FROM hanhdongsua ORDER BY MaHanhDongSua ASC";
$querry = mysqli_query($con, $sqli);

$page = new ConstructPage();

$page->getbarname('Danh sách hành động sửa');
$page->getButton_href('themhds');
$page->getButton_name('Thêm mới hành động sửa');
$page->getRowName(array('tên hành động', 'mã HĐ','mô tả'));
$page->getRowWidth(array(30,10,35));

$page->Issue1(); 

while($row = mysqli_fetch_array($querry)){
?>

                <tr>
                	<td><span><?php echo $row['TT']?></span></td>
                    <td class="l5"><a><?php echo $row['TenHanhDongSua'] ?></a></td>
                    <td class="l5"><span class="price"> <?php echo $row['MaHanhDongSua'] ?> </span></td>
                    <td><span class="thumb"><?php echo $row['MoTa'] ?></span></td>
                    <td><a href="?page_layout=suahds&idhds=<?php echo $row['TT'] ?>"><span>Sửa</span></a></td>
                    <td><a href="#"><span>Xóa</span></a></td>
                </tr>

<?php
}
$page->Issue2();
?>