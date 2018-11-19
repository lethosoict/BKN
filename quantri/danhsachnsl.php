
<?php
include_once 'corepages/danhsach.php';

$page = new ConstructPage();

$page->getbarname('Danh sách người sửa lỗi');
$page->getButton_href('themnsl');
$page->getButton_name('Them mới người sửa');
$page->getRowName(array('Mã người sửa','tên người sửa','học vấn','bậc tay nghề','đơn vị','ghi chú'));
$page->getRowWidth(array(15,20,10,10,10,30));

$page->Issue1();
?>
<!-- Connect to DB and get data...!! -->
	<tr>
                	<td><span> 1 </span></td>
                	<td class="l5"><span class="price">00001</span></td>
                    <td class="l5"><a> Nguyễn Văn Hải </a></td>
                    <td class="l5"><span class="price">Cao Đẳng</span></td>
                    <td class="l5">C3</td>
                    <td><span class="thumb">NM1</span></td>
                    <td><span class="price"></span></td>
                    <td><a href="?page_layout=suansl"><span>Sửa</span></a></td>
                    <td><a><span>Xóa</span></a></td>
                </tr>

<?php
$page->Issue2();
?>