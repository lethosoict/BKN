<?php
include_once 'corepages/danhsach.php';

$page = new ConstructPage();

$page->getbarname('Danh sách vị trí linh kiện');
$page->getButton_href('themvitri');
$page->getButton_name('Thêm vị trí mới');
$page->getRowName(array('tên vị trí', 'mã vị trí','mô tả'));
$page->getRowWidth(array(50,10,35));

$page->Issue1();
?>

?>


                <tr>
                	<td><span>01</span></td>
                    <td class="l5"><a href="#">Vị trí 1</a></td>
                    <td class="l5"><span class="price"> VT01</span></td>
                    <td><span class="thumb">Mô tả cho vị trí</span></td>
                    <td><a href="?page_layout=suavitri"><span>Sửa</span></a></td>
                    <td><a href="#"><span>Xóa</span></a></td>
                </tr>

<?php
$page->Issue2();
?>

