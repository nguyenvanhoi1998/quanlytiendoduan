<?php
require'lienket.php';
$bantv->set_charset("utf8");
$tendn=$_POST['ten_dang_nhap'];
$mk=md5($_POST['mat_khau']);
$timeday=date("(h:i)A - d/m/Y");

$tdl="UPDATE thanhvien SET ngaydangnhapgannhat='$timeday' WHERE tendangnhap='$tendn'";
$result=$bantv->query($tdl);

$tdl="SELECT * FROM thanhvien WHERE tendangnhap='$tendn' AND matkhau='$mk'";
$result=$bantv->query($tdl);

if($result->num_rows == 1){
    session_start();
	$_SESSION['tendangnhap']=$tendn;
	$_SESSION['matkhau']=$mk;
	header("location:index1.php");
} else {
	header("location:dangnhap.html");
}  
	
$bantv->close();
?>