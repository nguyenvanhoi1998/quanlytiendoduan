<?php
$maduan = $_POST['maduan'];
$tenduan = $_POST['tenduan'];
$startduan = $_POST['startduan'];
$endduan = $_POST['endduan'];

$con = new mysqli("localhost","root","","quanlytiendosinhvienthuctap");
$con->set_charset("utf8");

$sql = "UPDATE duan SET ten_duan='$tenduan',start_duan='$startduan',end_duan='$endduan' WHERE ma_duan='$maduan'";
$result = $con->query($sql);

echo "<script languege='javascript'>alert('Sửa thông tin dự án thành công');location.href='index.php';</script>";
$con->close();
?>