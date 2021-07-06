<?php
$mamh =$_GET['mamh'];
require'lienket.php';
$bantv->set_charset("utf8");
$tdl="UPDATE thongtinmuahang SET duyet = 'Đã duyệt' WHERE mamh='$mamh'";
$bantv->query($tdl);
$tdl="SELECT * FROM thongtinmuahang";
$result=$bantv->query($tdl);
echo "<script languege='javascript'>alert('Đã duyệt hóa đơn');location.href='hoadonchuaduyet.php';</script>";
$bantv->close();
?>