<?php
include_once 'phpclass/error.php';
//------Load data ma nhom san pham
$sqli_MaNsp ="SELECT * FROM nhomsanpham";
$querry_MaNsp = mysqli_query($con, $sqli_MaNsp);

$sqli_MaNl = "SELECT * FROM nhomloi";
$querry_MaNl = mysqli_query($con, $sqli_MaNl);


// $sqli_nsp = "SELECT * FROM nhomsanpham";
// $querry_nsp = mysqli_query($con, $sqli_nsp);

if(isset($_POST['submit'])){
	$submit_ma_spn = new GetSubmit($_POST['ma_spn'], '');
	$submit_ma_nsp = new GetSubmit($_POST['ma_nsp'], 'unselect');
	$submit_date_nhan = new GetSubmit($_POST['date_nhan'], '');
	$submit_ma_nl = new GetSubmit($_POST['ma_nl'], '');
	
	if(isset($submit_ma_spn->submit) &&
	   isset($submit_ma_nsp->submit) &&
	   isset($submit_date_nhan->submit) &&
	   isset($submit_ma_nl->submit)
	){
		// Insert into Database
		// echo $submit_mota_nsp->submit;
		// $sqli_insert_nsp = "INSERT INTO nhomsanpham (MaNhomSP, TenNhomSP, MoTa) VALUES 
										// ('$submit_ma_nsp->submit', '$submit_ten_nsp->submit', '$submit_mota_nsp->submit')";
		// $querry_insert_nsp = mysqli_query($con, $sqli_insert_nsp);
		// header('location: quantri.php?page_layout=danhsachnhomsp');
	}
}

?>

<script>
	function currentDate(){
		var d = new Date(),
			month = ''+(d.getMonth()+1),
			day =''+d.getDate(),
			year = d.getFullYear();
			
		if(month.length < 2) month = '0' + month;
		if(day.length <2) day = '0'+day;
		
		
		
		document.getElementById("datenhan").value = [year, month, day].join('-');
		
	}
</script>

<link rel="stylesheet" type="text/css" href="css/themnv.css" />

        <h2>Thêm mới sản phẩm nhận</h2>
		<div id="main">
        	<form method="post" enctype="multipart/form-data">
                <table id="add-prd" border="0" cellpadding="0" cellspacing="0">
                    <tr>
                        <td><label>Mã sản phẩm</label><br /> <input type="text" name="ma_spn"  />                       	
                        	<?php if(isset($submit_ma_spn->error)) echo $submit_ma_spn->error ?>
                        </td>
                    </tr>

                    <tr>
                        <td><label>Nhóm sản phẩm</label><br />  <!-- <input type="text" name="ma_nsp" value="" /> -->
                        	<select name = "ma_nsp">
                        		<option value="unselect" > unselect </option>
                        		<?php
                        			while($row = mysqli_fetch_array($querry_MaNsp)){
                        		?>
                        			<option value="<?php echo $row['MaNhomSP']?>"> <?php echo $row['TenNhomSP'] ?> </option>
                        		<?php
									}
                        		?>
                        	</select>
                        	<?php if(isset($submit_ma_nsp->error)) echo $submit_ma_nsp->error ?>
                        </td>
                    </tr>
                    
                    <tr>
                        <td><label>Date nhận</label><br /><input type="date" name="date_nhan" id="datenhan" value="" />
                        	<?php if(isset($submit_date_nhan->error)) echo $submit_date_nhan->error ?>
                        	<button type="button" onclick="currentDate()"> Current Date </button>
                        </td>
                    </tr>
                    
                    <tr>
                        <td><label>Mã nhóm lỗi</label><br />  <!-- <input type="text" name="ma_nl" value="" /> -->
                        	<select name= "ma_nl">
                        		<option value="unselect"> unselect </option>
                        		<?php
                        			while($row = mysqli_fetch_array($querry_MaNl)){
                        		?>
                        		<option value = "<?php echo $row['MaNhomLoi'] ?>"> <?php echo $row['TenNhomLoi']?>  </option>
                        		<?php
									}
                        		?>
                        	</select>
                        	<?php if(isset($submit_ma_nl->error)) echo $submit_ma_nl->error ?>
                        </td>
                    </tr>

                   
                    <tr>
                        <td><input type="submit" name="submit" value="Cập nhật" /> <input type="reset" name="reset" value="Làm mới" /></td>
                    </tr>
                </table>
            </form>
    	</div>
