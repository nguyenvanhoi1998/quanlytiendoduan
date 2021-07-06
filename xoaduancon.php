<?php	
$maduancon=$_GET['maduancon'];
$maduancha=$_GET['maduancha'];

$con = new mysqli("localhost","root","","quanlytiendosinhvienthuctap");
$con->set_charset("utf8");

$sql="DELETE FROM fileduan WHERE ma_duan='$maduancon'";
$con->query($sql);
$sql="DELETE FROM duancon WHERE ma_duancon='$maduancon'";
$con->query($sql);
echo "<script languege='javascript'>alert('Bạn đã xoá dự án con thành công.');location.href='danhsachduancon.php?maduan=".$maduancha."';</script>";

$con->close();