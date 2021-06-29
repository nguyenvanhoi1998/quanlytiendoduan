<?php	
$maduan=$_GET['maduan'];
$mafile=$_GET['mafile'];

$con = new mysqli("localhost","root","","quanlytiendosinhvienthuctap");
$con->set_charset("utf8");

$sql="DELETE FROM fileduan WHERE ma_duan='$maduan' AND stt='$mafile'";
$con->query($sql);
echo "<script languege='javascript'>alert('Bạn đã xoá file thành công.');location.href='danhsachfiledinhkem.php?maduan=".$maduan."';</script>";

$con->close();