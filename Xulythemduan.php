<?php
$maduan = $_POST['maduan'];
$tenduan = $_POST['tenduan'];
$startduan = date_create("".$_POST['startduan']."");
$startduanmoi = date_format($startduan,"Y,m,d");
$endduan = date_create("".$_POST['endduan']."");
$endduanmoi = date_format($endduan,"Y,m,d");
$tiendoduan = $_POST['tiendoduan'];

$con = new mysqli("localhost","root","","quanlytiendosinhvienthuctap");
$con->set_charset("utf8");
$sql = "INSERT INTO duan(ma_duan,ten_duan,start_duan,end_duan,tiendo_duan) VALUE ('$maduan','$tenduan','$startduanmoi','$endduanmoi','$tiendoduan')";
$result = $con->query($sql);
echo "<script languege='javascript'>alert('Thêm dự án thành công');location.href='themduan.php';</script>";
$con->close();
?>