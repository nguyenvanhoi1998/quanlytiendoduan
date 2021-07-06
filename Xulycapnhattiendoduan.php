<?php
$maduan=$_POST['maduan'];
$tiendoduan=$_POST['tiendo'];
$sum=0;

$con = new mysqli("localhost","root","","quanlytiendosinhvienthuctap");
$con->set_charset("utf8");

$sql="SELECT * FROM duancon WHERE ma_duancha='$maduan'";
$result=$con->query($sql);
if($result->num_rows > 0){
	echo "<script languege='javascript'>alert('Bạn không thể cập nhật tiến độ khi có dự án con. Bạn phải cập nhật tiến độ dự án từ dự án con !!!');location.href='index.php';</script>";
} else {

$sql="UPDATE duan SET tiendo_duan='$tiendoduan' WHERE ma_duan='$maduan'";
$result=$con->query($sql);
echo "<script languege='javascript'>alert('Cập nhật tiến độ dự án thành công');location.href='index.php';</script>";
}
$con->close();
?>