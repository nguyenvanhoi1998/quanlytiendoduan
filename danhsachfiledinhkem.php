<?php
	header("Cache-Control: no-strore, no-cache, must-revalidate");
?>
<!DOCTYPE HTML>
<html>
<head>
<title> Danh sách các file đính kèm cho dự án</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css">
</head>
<body style="background-image: url('background.jpg');">
<div class="container"><h1 style="color:green;text-align:center;">Danh sách các file đính kèm cho dự án</h1>
	<?php $maduan=$_GET['maduan']; 
	$con = new mysqli("localhost","root","","quanlytiendosinhvienthuctap");
	$con->set_charset("utf8");
	$sql="SELECT * FROM fileduan WHERE ma_duan='$maduan'";
	$result=$con->query($sql);
	while($row=$result->fetch_assoc()){
	$mafile = $row['stt'];
	$maduan = $row['ma_duan'];
	$tenfile = $row['tenfile'];
	$kieufile = $row['kieufile'];
	?>
	<a href="themfile.php?maduan=<?php echo $maduan; ?>"><input class="btn btn-outline-primary" type="button" value="Thêm File"></a>
	<?php $sql="SELECT * FROM duan WHERE ma_duan='$maduan'";
	$result=$con->query($sql);
	if($result->num_rows > 0){
		echo "<a href='index.php'><input class='btn btn-outline-primary' type='button' value='Trở lại'></a>";
	}
	$sql0="SELECT * FROM duancon WHERE ma_duancon='$maduan'";
	$result0=$con->query($sql0);
	if($result0->num_rows > 0){
	while($row0=$result0->fetch_assoc()){
		$maduancha=$row0['ma_duancha'];
		echo "<a href='danhsachduancon.php?maduan=".$maduancha."'><input class='btn btn-outline-primary' type='button' value='Trở lại'></a>
		<a href='index.php'><input class='btn btn-outline-primary' type='button' value='Trang chủ'></a>";
	} }
	?><br>
	<br><div>
		<table class="table table-bordered" style="text-align:center;">
			<thead class="thead-dark"><tr><th>Mã dự án</th><th>Tên file</th><th>Kiểu file</th><th colspan=2>Lựa chọn</th></tr></thead>
			<?php $maduan=$_GET['maduan']; 
				$con = new mysqli("localhost","root","","quanlytiendosinhvienthuctap");
				$con->set_charset("utf8");
				$sql="SELECT * FROM fileduan WHERE ma_duan='$maduan'";
				$result=$con->query($sql);
				while($row=$result->fetch_assoc()){
				$mafile = $row['stt'];
				$maduan = $row['ma_duan'];
				$tenfile = $row['tenfile'];
				$kieufile = $row['kieufile'];
				?>
			<tr>
				<td><?php echo $maduan; ?></td>
				<td><?php echo $tenfile; ?></td>
				<td><?php echo $kieufile; ?></td>
				<td><a href="xoafile.php?maduan=<?php echo $maduan; ?>&mafile=<?php echo $mafile; ?>"> Xoá file </a></td>
				<td><a href="xemfile.php?maduan=<?php echo $maduan; ?>&mafile=<?php echo $mafile; ?>"> Xem file </a></td></tr><?php } ?>
		</table>
		<?php 
		}
		?>
	</div>
</div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
</body>
</html>
