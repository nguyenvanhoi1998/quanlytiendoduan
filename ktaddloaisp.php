<?php
if(isset($_GET['maloaisanpham'])){
	$maloaisp= $_GET['maloaisanpham'];
	require'lienket.php';
	$bantv->set_charset("utf8");
	
	$sql = "SELECT * FROM loaisanpham WHERE maloaisp='$maloaisp'";
	$result = $bantv->query($sql);
	
	if($result->num_rows > 0){
		echo "Mã loại sản phẩm đã tồn tại";
	} else {
		echo "";
	}
	
	$bantv->close();
}
?>