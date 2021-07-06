<?php
if(isset($_GET['maduancon'])){
	$maduancon= $_GET['maduancon'];
	$con = new mysqli("localhost","root","","quanlytiendosinhvienthuctap");
	$con->set_charset("utf8");
	
	$sql = "SELECT * FROM duancon WHERE ma_duancon='$maduancon'";
	$result = $con->query($sql);
	
	if($result->num_rows > 0){
		echo "Mã dự án con này đã tồn tại";
	} else {
		echo "";
	}
	
	$con->close();
}
?>