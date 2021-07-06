<?php	
$maduan=$_GET['maduan'];

$con = new mysqli("localhost","root","","quanlytiendosinhvienthuctap");
$con->set_charset("utf8");

$sql="SELECT * FROM duancon WHERE ma_duancha='$maduan'";
$result=$con->query($sql);
if($result->num_rows > 0){
	echo "<script languege='javascript'>alert('Dự án này còn dự án con nên không xoá được !!!');location.href='index.php';</script>";
} else {
	$sql="DELETE FROM fileduan WHERE ma_duan='$maduan'";
	$con->query($sql);
	$sql="DELETE FROM duan WHERE ma_duan='$maduan'";
	$con->query($sql);
	echo "<script languege='javascript'>alert('Bạn đã xoá dự án thành công.');location.href='index.php';</script>";
}
$con->close();