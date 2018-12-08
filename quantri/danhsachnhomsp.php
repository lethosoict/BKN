<?php
include_once 'corepages/danhsach.php';

ob_start();
$sqli = "SELECT * FROM nhomsanpham ORDER BY TT ASC";
$querry = mysqli_query($con, $sqli);

$page = new ConstructPage();

$page->getbarname('Danh sách người sửa lỗi');
$page->getButton_href('themnhomsp');
$page->getButton_name('Thêm mới nhóm sản phẩm');
$page->getRowName(array('tên nhóm sản phẩm', 'mã nhóm','mô tả'));
$page->getRowWidth(array(20,10,60));

$page->Issue1();
?>

<?php 
	while($row = mysqli_fetch_array($querry)){
?>

                <tr>
                	<td><span><?php echo $row['TT'] ?></span></td>
                    <td class="l5"><a href="#"><?php echo $row['TenNhomSP'] ?></a></td>
                    <td class="l5"><span class="price"><?php echo $row['MaNhomSP'] ?></span></td>
                    <td><span class="thumb"><?php echo $row['MoTa'] ?></span></td>
                    <td><a href="?page_layout=suansp&idnsp=<?php echo $row['TT']?>"><span>Sửa</span></a></td>
                    <td><a href="#"><span>Xóa</span></a></td>
                </tr>
                
<?php
	}
?>

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
