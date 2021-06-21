<?php
$maduancon = $_POST['maduancon'];
$tenduancon = $_POST['tenduancon'];
$startduancon = date_create("".$_POST['startduancon']."");
$startduanconoi = date_format($startduancon,"Y,m,d");
$endduancon = date_create("".$_POST['endduancon']."");
$endduanconmoi = date_format($endduancon,"Y,m,d");
$tiendoduancon = $_POST['tiendoduancon'];

$con = new mysqli("localhost","root","","quanlytiendosinhvienthuctap");
$con->set_charset("utf8");
$sql = "INSERT INTO duancon(ma_duancon,ten_duancon,start_duancon,end_duancon,tiendo_duancon,ma_duancha) VALUE ('$maduancon','$tenduancon','$startduanconmoi','$endduanconmoi','$tiendoduancon','$maduancha')";
$result = $con->query($sql);
echo "<script languege='javascript'>alert('Thêm dự án con thành công');location.href='themduancon.php';</script>";
$con->close();
?>