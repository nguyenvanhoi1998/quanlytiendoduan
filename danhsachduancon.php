<?php
	header("Cache-Control: no-strore, no-cache, must-revalidate");
?>
<!DOCTYPE HTML>
<html>
<head>
<title> Danh sách các dự án con</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css">
</head>
<body style="background-image: url('background.jpg');">
<div class="container"><h1 style="color:green;text-align:center;">Danh sách các dự án con</h1><br>
	<div>
		<table class="table table-bordered" style="text-align:center;">
			<thead class="thead-dark"><tr><th>Mã dự án cha</th><th>Mã dự án con</th><th>Tên dự án con</th><th>Ngày bắt đầu</th><th>Ngày kết thúc</th><th>Tiến độ</th><th>Xem tiến độ</th><th>Cập nhật tiến độ</th><th>File đính kèm</th><th colspan=2>Lựa chọn</th></tr></thead>
			<?php $maduan=$_GET['maduan'];
				$con = new mysqli("localhost","root","","quanlytiendosinhvienthuctap");
				$con->set_charset("utf8");
				$sql="SELECT * FROM duancon WHERE ma_duancha='$maduan'";
				$result=$con->query($sql);
				while($row=$result->fetch_assoc()){
				$maduancha = $row['ma_duancha'];
				$maduancon = $row['ma_duancon'];
				$tenduancon = $row['ten_duancon'];
				$startduancon = $row['start_duancon'];
				$endduancon = $row['end_duancon'];
				$tiendoduancon = $row['tiendo_duancon']; 
				?>
			<tr><td><?php echo $maduancha; ?></td>
				<td><?php echo $maduancon; ?></td>
				<td><?php echo $tenduancon; ?></td>
				<td><?php echo $startduancon; ?></td>
				<td><?php echo $endduancon; ?></td>
				<td><?php echo $tiendoduancon; ?> %</td>
				<td><a href="tiendoduan.php?maduan=<?php echo $maduan; ?>">Xem tiến độ</a></td>
				<td><a href="capnhattiendo.php?maduan=<?php echo $maduan; ?>&maduancon=<?php echo $maduancon; ?>">Cập nhật tiến độ</a></td>
				<td><a href="danhsachfiledinhkem.php?maduan=<?php echo $maduancon; ?>"> Danh sách file</a></td>
				<td><a href="suaduancon.php?maduancon=<?php echo $maduancon; ?>">Sửa </a></td>
				<td><a href="xoaduancon.php?maduancon=<?php echo $maduancon; ?>&maduancha=<?php echo $maduancha; ?>"> Xoá </a></td></tr><?php } ?>
		</table><br>
	</div>
	<a href="themduancon.php"><input class="btn btn-outline-primary" type="button" value="Thêm dự án con mới"></a>
	<a href="index.php"><input class="btn btn-outline-primary" type="button" value="Trang chủ"></a>
</div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
</body>
</html>