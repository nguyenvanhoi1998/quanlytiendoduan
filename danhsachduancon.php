<?php
	header("Cache-Control: no-strore, no-cache, must-revalidate");
?>
<!DOCTYPE HTML>
<html>
<head>
<title> Danh sách các dự án con</title>
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
		margin-left: 150px;
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
		width: 150px;
		height: 30px;
		border: none;
		background: #2a4fa4;
		color: white;
		border-radius: 5px 5px;
	}
	.a1 {
		text-decoration: none;
		color: white;
		margin-left: 150px;
	}
	.a2:hover{
		background: black;
		color: yellow;
	}
	.a1:hover{
		background: black;
		color: yellow;
	}
	.a22 {
		text-align: center;
		width: 100px;
		height: 30px;
		border: none;
		background: #2a4fa4;
		color: white;
		border-radius: 5px 5px;
	}
	.a22:hover{
		background: black;
		color: yellow;
	}
	.a11 {
		text-decoration: none;
		color: white;
		margin-left: 10px;
	}
	.a11:hover{
		background: black;
		color: yellow;
	}
</style>
</head>
<body>
<div class="container"><h1 style="color:green;text-align:center;">Danh sách các dự án con</h1>
	<div>
		<table class="table">
			<tr><th class="th">Mã dự án cha</th><th class="th">Mã dự án con</th><th class="th">Tên dự án con</th><th class="th">Ngày bắt đầu</th><th class="th">Ngày kết thúc</th><th class="th">Tiến độ</th><th class="th">Xem tiến độ</th><th class="th">Cập nhật tiến độ</th><th class="th">File đính kèm</th><th class="th">Sửa</th><th class="th">Xoá</th></tr>
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
			<tr><td class="td"><?php echo $maduancha; ?></td>
				<td class="td"><?php echo $maduancon; ?></td>
				<td class="td"><?php echo $tenduancon; ?></td>
				<td class="td"><?php echo $startduancon; ?></td>
				<td class="td"><?php echo $endduancon; ?></td>
				<td class="td"><?php echo $tiendoduancon; ?> %</td>
				<td class="td"><a class="a" href="tiendoduan.php?maduan=<?php echo $maduan; ?>">Xem tiến độ</a></td>
				<td class="td"><a class="a" href="capnhattiendo.php?maduan=<?php echo $maduan; ?>&maduancon=<?php echo $maduancon; ?>">Cập nhật tiến độ</a></td>
				<td class="td"><a class="a" href="danhsachfiledinhkem.php?maduan=<?php echo $maduancon; ?>"> Danh sách file</a></td>
				<td class="td"><a class="a" href="suaduancon.php?maduancon=<?php echo $maduancon; ?>">Sửa thông tin </a></td>
				<td class="td"><a class="a" href="xoaduancon.php?maduancon=<?php echo $maduancon; ?>&maduancha=<?php echo $maduancha; ?>"> Xoá dự án </a></td></tr><?php } ?>
		</table><br>
	</div>
	<a class="a1" href="themduancon.php"><input class="a2" type="button" value="Thêm dự án con mới"></a>
	<a class="a11" href="index.php"><input class="a22" type="button" value="Trang chủ"></a>
</div>
</body>
</html>