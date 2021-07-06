<?php
if(isset($_GET['tensanpham'])){
	$tensp= $_GET['tensanpham'];
	require'lienket.php';
	$bantv->set_charset("utf8");
	
	$sql = "SELECT * FROM sanpham WHERE tensp='$tensp'";
	$result = $bantv->query($sql);
	
	if($result->num_rows > 0){
		echo "Tên sản phẩm đã tồn tại";
	} else {
		echo "";
	}
	
	$bantv->close();
}
?>