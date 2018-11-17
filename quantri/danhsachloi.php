<?php
include_once 'corepages/danhsach.php';

$page = new ConstructPage();

$page->getbarname('Danh sách lỗi');
$page->getButton_href('themloi');
$page->getButton_name('Thêm mới nhóm lỗi');
$page->getRowName (array("Tên nhóm lỗi", "Mã nhóm lỗi", "Mô tả lỗi"));
$page->getRowWidth(array(30,10,25));

$page->Issue1();
?>
		
		<tr>
				<td><span>01</span></td>
				<td class='l5'><a href='#'>Nhóm lỗi 1</a></td>
				<td class='l5'><span class='price'>NL1</span></td>
				<td><span class='thumb'>Mô tả cho nhóm lỗi 1</span></td>
				<td><a href='#'><span>Sửa</span></a></td>
				<td><a href='#'><span>Xóa</span></a></td>
				</tr>
		
<?php
$page->Issue2();
?>