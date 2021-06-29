<?php
if(isset($_GET['maduan'])){
	$maduan= $_GET['maduan'];
	$con = new mysqli("localhost","root","","quanlytiendosinhvienthuctap");
	$con->set_charset("utf8");
	
	$sql = "SELECT * FROM duan WHERE ma_duan='$maduan'";
	$result = $con->query($sql);
	
	if($result->num_rows > 0){
		echo "Mã dự án này đã tồn tại";
	} else {
		echo "";
	}
	
	$con->close();
}
?>