<?php
include_once 'corepages/danhsach.php';

$page = new ConstructPage();

$page->getbarname('Danh sách hành động sửa');
$page->getButton_href('themhds');
$page->getButton_name('Thêm mới hành động sửa');
$page->getRowName(array('tên hành động', 'mã HĐ','mô tả'));
$page->getRowWidth(array(30,10,35));

$page->Issue1(); 

?>

                <tr>
                	<td><span>01</span></td>
                    <td class="l5"><a href="#">Hành động sửa TRG0001</a></td>
                    <td class="l5"><span class="price"> TRG0001</span></td>
                    <td><span class="thumb">Mô tả hành động</span></td>
                    <td><a href="?page_layout=suahds"><span>Sửa</span></a></td>
                    <td><a href="#"><span>Xóa</span></a></td>
                </tr>

<?php
$page->Issue2();
?>