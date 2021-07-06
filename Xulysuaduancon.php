<?php
$maduancha = $_POST['maduancha'];
$maduancon = $_POST['maduancon'];
$tenduancon = $_POST['tenduancon'];
$startduancon = $_POST['startduancon'];
$endduancon = $_POST['endduancon'];

$con = new mysqli("localhost","root","","quanlytiendosinhvienthuctap");
$con->set_charset("utf8");

$sql = "UPDATE duancon SET ten_duancon='$tenduancon',start_duancon='$startduancon',end_duancon='$endduancon' WHERE ma_duancon='$maduancon'";
$result = $con->query($sql);

echo "<script languege='javascript'>alert('Sửa thông tin dự án con thành công');location.href='danhsachduancon.php?maduan=".$maduancha."';</script>";
$con->close();
?>