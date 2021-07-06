<?php
	header("Cache-Control: no-strore, no-cache, must-revalidate");
?>
<html>
<head>
<title> Shop SmartPhone </title>
</head>
<?php
$tendn=$_POST['ten_dang_nhap'];
$mk=md5($_POST['mat_khau']);
$hovaten=$_POST['ho_va_ten'];
$gioitinh=$_POST['gioi_tinh'];
$sdt=$_POST['so_dien_thoai'];
$timeday=date("(h:i)A - d/m/Y");
require'lienket.php';
$bantv->set_charset("utf8");
$tdl="INSERT INTO thanhvien (tendangnhap,matkhau,hovaten,gioitinh,sdt,ngaydangnhapgannhat) VALUES ('$tendn','$mk','$hovaten','$gioitinh','$sdt','$timeday')";
$bantv->query($tdl);
$tdl="SELECT * FROM thanhvien WHERE tendangnhap='$tendn' AND matkhau='$mk'";
$result=$bantv->query($tdl);
if($result->num_rows == 1){
    session_start();
	$_SESSION['tendangnhap']=$tendn;
	$_SESSION['matkhau']=$mk;
	echo "<script languege='javascript'>alert('Bạn đã đăng ký tài khoản thành công');location.href='index1.php';</script>";
} else {
	header("location:dangnhap.html");
}  
$bantv->close();
?>
</html>