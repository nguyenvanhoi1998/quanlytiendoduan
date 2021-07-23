<?php
	header("Cache-Control: no-strore, no-cache, must-revalidate");
?>
<!DOCTYPE HTML>
<html>
<head>
<title> Xem nội dung file đính kèm của dự án</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css">
</head>
<body style="background-image: url('background.jpg');">
<?php $maduan=$_GET['maduan']; $mafile=$_GET['mafile'];
	$con = new mysqli("localhost","root","","quanlytiendosinhvienthuctap");
	$con->set_charset("utf8");
	$sql="SELECT * FROM fileduan WHERE ma_duan='$maduan' AND stt='$mafile'";
	$result=$con->query($sql);
	$row=$result->fetch_assoc();
	$tenfile = $row['tenfile'];
	$duoi=strtolower(pathinfo($tenfile,PATHINFO_EXTENSION));
	if($duoi=="pdf" || $duoi=="jpg" || $duoi=="png"){ echo "
		<br><a href='danhsachfiledinhkem.php?maduan=".$maduan."'><input class='btn btn-outline-primary' type='button' value='Trở lại'></a>
		<a href='index.php'><input class='btn btn-outline-primary' type='button' value='Trang chủ'></a><br>
		<div><h5 style='color:green;text-align:center;'>Nội dung file ".$tenfile."</h5>
		<div style='text-align:center;'>
		<embed src='./".$tenfile."' width='1360' height='500' type='application/pdf'><br>
		</div></div> "; } else { echo "
		<a href='danhsachfiledinhkem.php?maduan=".$maduan."'><input class='btn btn-outline-primary' type='button' value='Trở lại'></a>
		<a href='index.php'><input class='btn btn-outline-primary' type='button' value='Trang chủ'></a>
		<div><h5 style='color:green;text-align:center;'>file ".$tenfile." đã được tải xuống</h5>
		<div style='text-align:center;'>
		<embed src='./".$tenfile."' type='application/pdf'></div></div> ";
	} ?>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
</body>
</html>
