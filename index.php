<?php
	header("Cache-Control: no-strore, no-cache, must-revalidate");
?>
<!DOCTYPE HTML>
<html>
<head>
<title> Danh sách các dự án </title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css">
</head>
<body style="background-image: url('background.jpg');">
<div class="container"><h1 style="color:green;text-align:center;">Danh sách các dự án</h1><br>
	<div>
		<table class="table table-bordered" style="text-align:center;">
			<thead class="thead-dark"><tr><th>Mã dự án</th><th>Tên dự án</th><th>Ngày bắt đầu</th><th>Ngày kết thúc</th><th>Tiến độ</th><th>Dự án con</th><th>Xem tiến độ</th><th>Cập nhật tiến độ</th><th>File đính kèm</th><th colspan=2>Lựa chọn</th></tr></thead>
			<?php $con = new mysqli("localhost","root","","quanlytiendosinhvienthuctap");
				$con->set_charset("utf8");
				$sql="SELECT * FROM duan";
				$result=$con->query($sql);
				while($row=$result->fetch_assoc()){
				$maduan = $row['ma_duan'];
				$tenduan = $row['ten_duan'];
				$startduan = $row['start_duan'];
				$endduan = $row['end_duan'];
				$tiendoduan = $row['tiendo_duan']; 
				?>
			 <tbody><tr><td><?php echo $maduan; ?></td>
				<td><?php echo $tenduan; ?></td>
				<td><?php echo $startduan; ?></td>
				<td><?php echo $endduan; ?></td>
				<td><?php echo $tiendoduan; ?> %</td>
				<td><a href="danhsachduancon.php?maduan=<?php echo $maduan; ?>"> Danh sách dự án con</a></td>
				<td><a href="tiendoduan.php?maduan=<?php echo $maduan; ?>">Xem tiến độ</a></td>
				<td><a href="capnhattiendoduan.php?maduan=<?php echo $maduan; ?>">Cập nhật tiến độ</a></td>
				<td><a href="danhsachfiledinhkem.php?maduan=<?php echo $maduan; ?>">Danh sách file</a></td>
				<td><a href="suaduan.php?maduan=<?php echo $maduan; ?>">Sửa </a></td>
				<td><a href="xoaduan.php?maduan=<?php echo $maduan; ?>"> Xoá </a></td></tr><?php } ?></tbody>
		</table><br>
		<a href="themduan.php"><input class="btn btn-outline-primary" type="button" value="Thêm dự án mới"></a>
	</div>
</div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
</body>
</html>