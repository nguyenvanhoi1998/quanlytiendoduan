<?php
	header("Cache-Control: no-strore, no-cache, must-revalidate");
?>
<!DOCTYPE HTML>
<html>
<head>
<title> Danh sách các file đính kèm cho dự án</title>
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
		margin-left: 380px;
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
		margin-left: 380px;
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
<div class="container"><h1 style="color:green;text-align:center;">Danh sách các file đính kèm cho dự án</h1>
	<div>
		<table class="table">
			<tr><th class="th">Mã dự án</th><th class="th">Tên file</th><th class="th">Kiểu file</th><th class="th">Thêm file</th><th class="th">Xoá file</th></tr>
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
				<td class="td"><?php echo $maduan; ?></td>
				<td class="td"><?php echo $tenfile; ?></td>
				<td class="td"><?php echo $kieufile; ?></td>
				<td class="td"><a class="a" href="themfile.php?maduan=<?php echo $maduan; ?>">Thêm file </a></td>
				<td class="td"><a class="a" href="xoafile.php?maduan=<?php echo $maduan; ?>&mafile=<?php echo $mafile; ?>"> Xoá file </a></td></tr><?php } ?>
		</table><br>
		<a class="a1" href="index.php"><input class="a2" type="button" value="Trang chủ"></a>
	</div>
</div>
</body>
</html>