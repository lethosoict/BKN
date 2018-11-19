<?php
include_once 'corepages/danhsach.php';

$page = new ConstructPage();

$page->getbarname('Danh sách người sửa lỗi');
$page->getButton_href('themnhomsp');
$page->getButton_name('Them mới nhóm sản phẩm');
$page->getRowName(array('tên nhóm sản phẩm', 'mã nhóm','mô tả'));
$page->getRowWidth(array(20,10,60));

$page->Issue1();
?>

                <tr>
                	<td><span>01</span></td>
                    <td class="l5"><a href="#">ONT</a></td>
                    <td class="l5"><span class="price">ONT</span></td>
                    <td><span class="thumb">12ADC</span></td>
                    <td><a href="?page_layout=suansp"><span>Sửa</span></a></td>
                    <td><a href="#"><span>Xóa</span></a></td>
                </tr>

     <!--
                <tr>
                    <td><span>02</span></td>
                    <td class="l5"><a href="#">MYTV</a></td>
                    <td class="l5"><span class="price">MYTV</span></td>
                    <td><span class="thumb">21ASE</span></td>
                    <td><a href="#"><span>Sửa</span></a></td>
                    <td><a href="#"><span>Xóa</span></a></td>
                </tr>

                <tr>
                    <td><span>03</span></td>
                    <td class="l5"><a href="#">GalaxyY</a></td>
                    <td class="l5"><span class="price">GLX</span></td>
                    <td><span class="thumb">3YC</span></td>
                    <td><a href="#"><span>Sửa</span></a></td>
                    <td><a href="#"><span>Xóa</span></a></td>
                </tr>

                <tr>
                    <td><span>04</span></td>
                    <td class="l5"><a href="#">SOLARAINRE</a></td>
                    <td class="l5"><span class="price">SLR</span></td>
                    <td><span class="thumb">SRYF</span></td>
                    <td><a href="#"><span>Sửa</span></a></td>
                    <td><a href="#"><span>Xóa</span></a></td>
                </tr>
        -->

<?php
$page->Issue2();
?>
