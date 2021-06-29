<?php
	header("Cache-Control: no-strore, no-cache, must-revalidate");
?>
<!DOCTYPE HTML>
<html>
<head>
<title> Danh sách các dự án </title>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
<style>
	body {
		padding: 0px;
		margin: 0px;
		background-image: url("background.jpg");
		font-family: Arial, Times New Roman;
		font-size: 13px;
	}
	.table {
		border: 1px solid black;
		text-align: center;
		margin-left: 170px;
	}
	.th {
		border: 1px solid black;
		text-align: center;
	}
	.td {
		border: 1px solid black;
		text-align: center;
	}
	.a {
		text-decoration: none;
		text-align: center;
		color: blue;
	}
	.a2 {
		text-align: center;
		width: 120px;
		height: 30px;
		border: none;
		background: #2a4fa4;
		color: white;
		border-radius: 5px 5px;
	}
	.a1 {
		text-decoration: none;
		color: white;
		margin-left: 170px;
	}
	.a2:hover{
		background: black;
		color: yellow;
	}
	.a1:hover{
		background: black;
		color: yellow;
	}
</style>
</head>
<body>
<div class="container"><h1 style="color:green;text-align:center;">Danh sách các dự án</h1>
	<div>
		<table class="table">
			<tr><th class="th">Mã dự án</th><th class="th">Tên dự án</th><th class="th">Ngày bắt đầu</th><th class="th">Ngày kết thúc</th><th class="th">Tiến độ</th><th class="th">Dự án con</th><th class="th">Xem tiến độ</th><th class="th">Cập nhật tiến độ</th><th class="th">File đính kèm</th><th class="th">Sửa</th><th class="th">Xoá</th></tr>
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
			<tr><td class="td"><?php echo $maduan; ?></td>
				<td class="td"><?php echo $tenduan; ?></td>
				<td class="td"><?php echo $startduan; ?></td>
				<td class="td"><?php echo $endduan; ?></td>
				<td class="td"><?php echo $tiendoduan; ?> %</td>
				<td class="td"><a class="a" href="danhsachduancon.php?maduan=<?php echo $maduan; ?>"> Danh sách dự án con</a></td>
				<td class="td"><a class="a" href="tiendoduan.php?maduan=<?php echo $maduan; ?>">Xem tiến độ</a></td>
				<td class="td"><a class="a" href="capnhattiendoduan.php?maduan=<?php echo $maduan; ?>">Cập nhật tiến độ</a></td>
				<td class="td"><a class="a" href="danhsachfiledinhkem.php?maduan=<?php echo $maduan; ?>">Danh sách file</a></td>
				<td class="td"><a class="a" href="suaduan.php?maduan=<?php echo $maduan; ?>">Sửa thông tin </a></td>
				<td class="td"><a class="a" href="xoaduan.php?maduan=<?php echo $maduan; ?>"> Xoá dự án </a></td></tr><?php } ?>
		</table><br>
		<a class="a1" href="themduan.php"><input class="a2" type="button" value="Thêm dự án mới"></a>
	</div>
</div>
</body>
</html>