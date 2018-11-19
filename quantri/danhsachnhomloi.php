<?php
include_once 'corepages/danhsach.php';

$page = new ConstructPage();

$page->getbarname('Danh sách nhóm lỗi');
$page->getButton_href('themloi');
$page->getButton_name('Thêm mới nhóm lỗi');
$page->getRowName(array('tên nhóm lỗi', 'mã nhóm lỗi','mô tả'));
$page->getRowWidth(array(50,10,35));

$page->Issue1();
?>

                <tr>
                	<td><span>01</span></td>
                    <td class="l5"><a href="#">Lỗi ABCD</a></td>
                    <td class="l5"><span class="price"> L001</span></td>
                    <td><span class="thumb">Mô tả cho lỗi</span></td>
                    <td><a href="?page_layout=suanl"><span>Sửa</span></a></td>
                    <td><a href="#"><span>Xóa</span></a></td>
                </tr>

<?php
$page->Issue2();
?>