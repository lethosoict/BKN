
<?php
include_once 'corepages/danhsach.php';

$page = new ConstructPage();

$page->getbarname('Danh sách linh kiện');
$page->getButton_href('themlinhkien');
$page->getButton_name('Thêm mới linh kiện');
$page->getRowName(array('tên linh kiện', 'mã linh kiện','mô tả'));
$page->getRowWidth(array(50,10,35));

$page->Issue1();
?>

                <tr>
                	<td><span>01</span></td>
                    <td class="l5"><a href="#">Linh kiện 1</a></td>
                    <td class="l5"><span class="price">LK1</span></td>
                    <td><span class="thumb">Mô tả cho linh kiện 1</span></td>
                    <td><a href="?page_layout=sualk"><span>Sửa</span></a></td>
                    <td><a href="#"><span>Xóa</span></a></td>
                </tr>

<?php
$page->Issue2();
?>
