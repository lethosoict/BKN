<?php
	class ConstructPage{
		
		var $barname;
		var $button_href;
		var $button_name;
		
		var $rowname;
		var $rowwidth;
		
		function getbarname($name){
			$this->barname = $name;
		}
		
		function getButton_href($but_href){
			$this->button_href = $but_href;
		}
		
		function getButton_name($but_name){
			$this->button_name = $but_name;
		}
		
		function getRowscount($rowscount){
			$this->rowscount = $rowscount;
		}
		
		function getRowName($rowna){
			$this->rowname = $rowna;
		}
		
		function getRowWidth($rowwi){
			$this->rowwidth =$rowwi;
		}

				
		
		function Issue1(){
		$rw = count($this->rowname);
						
		echo" <link rel='stylesheet' type='text/css' href='css/danhsachnv.css' /> ";
		echo "<h2>".$this->barname."</h2>";
		echo "<div id='main'>";
		echo "<p id='add-prd'><a href='?page_layout=".$this->button_href."'><span>".$this->button_name."</span></a></p>";
		echo "<table id='prds' border='0' cellpadding='0' cellspacing='0' width='100%'>";
		echo "<tr id='prd-bar'>";
		echo "<td width='5%'>TT</td>";	
			
		for($i=0;$i<$rw;$i++){
			echo "<td width='".$this->rowwidth[$i]."%'>".$this->rowname[$i]."</td>";
		}		
		echo "<td width='5%'>Sửa</td>";
		echo "<td width='5%'>Xóa</td>";
		echo "</tr>";
		}	


		function Issue2(){
		echo "</table>";
		echo "<p id='pagination'><span>1</span> <a href='#'>2</a> <a href='#'>3</a> <a href='#'>4</a> <a href='#'>5</a></p>";
		echo "</div>";
		}
		
	}
	
?>

	<!--
	<link rel='stylesheet' type='text/css' href='css/danhsachnv.css' />
				<h2>Danh sách nhóm lỗi</h2>
				<div id="main">
				<p id="add-prd"><a href="?page_layout=themlinhkien"><span>Thêm nhóm lỗi mới</span></a></p>       	
				<table id="prds" border="0" cellpadding="0" cellspacing="0" width="100%">
					<tr id="prd-bar">
						<td width="5%">TT</td>
						<td width="50%">Tên nhóm lỗi</td>
						<td width="10%">Mã nhóm lỗi</td>
						<td width="35%">Mô tả</td>
						<td width="5%">Sửa</td>
						<td width="5%">Xóa</td>
					</tr>
						 <tr>
						<td><span>01</span></td>
						<td class="l5"><a href="#">Nhóm lỗi 1</a></td>
						<td class="l5"><span class="price">NL1</span></td>
						<td><span class="thumb">Mô tả cho nhóm lỗi 1</span></td>
						<td><a href="#"><span>Sửa</span></a></td>
						<td><a href="#"><span>Xóa</span></a></td>
					</tr>
						  </table>
				<p id="pagination"><span>1</span> <a href="#">2</a> <a href="#">3</a> <a href="#">4</a> <a href="#">5</a></p>
			</div>
			-->
	
