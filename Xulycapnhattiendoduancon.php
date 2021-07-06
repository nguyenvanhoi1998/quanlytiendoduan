<?php
$maduan=$_POST['maduan'];
$maduancon=$_POST['maduancon'];
$tiendoduancon=$_POST['tiendo'];
$sum=0;

$con = new mysqli("localhost","root","","quanlytiendosinhvienthuctap");
$con->set_charset("utf8");
$sql="UPDATE duancon SET tiendo_duancon='$tiendoduancon' WHERE ma_duancha='$maduan' AND ma_duancon='$maduancon'";
$result=$con->query($sql);
$dem=mysqli_query($con,"SELECT * FROM duancon WHERE ma_duancha='$maduan'");
$dem=$dem->num_rows;
$sql="SELECT * FROM duancon WHERE ma_duancha='$maduan'";
$result=$con->query($sql);
while($row=$result->fetch_assoc()){
	$sum += $row['tiendo_duancon'];}
$tiendomoi=$sum/$dem;
$sql="UPDATE duan SET tiendo_duan='$tiendomoi' WHERE ma_duan='$maduan'";
$result=$con->query($sql);
echo "<script languege='javascript'>alert('Cập nhật tiến độ dự án thành công');location.href='danhsachduancon.php?maduan=".$maduan."';</script>";
$con->close();
?>