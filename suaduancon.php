<?php
	header("Cache-Control: no-strore, no-cache, must-revalidate");
?>
<!DOCTYPE HTML>
<html>
<head>
<title> Sửa thông tin dự án con </title>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
<style>
	*{
		margin: 0;
		padding: 0;
	}
	body {
		padding: 0px;
		margin: 0px;
		background-image: url("background.jpg");
		font-family: Arial, Times New Roman;
		font-size: 13px;
	}
	.content {
		position: fixed;
		left: 50%;
		top: 50%;
		transform: translate(-50%,-50%);
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
	}
	.a2:hover{
		background: black;
		color: yellow;
	}
	.a1:hover{
		background: black;
		color: yellow;
	}
	.center {
		text-align: center;
	}
	.error {
		color: red;
	}
	.ban {
		color: blue;
		padding: 10px 10px 10px 10px;
	}
</style>
</head>
<body>
<div class="container">
	<div class="content">
		<h1 style="text-align: center;color: blue">Sửa thông tin dự án con</h1>
		<form action="Xulysuaduancon.php" method="POST" enctype="multipart/form-data" onsubmit="return themduancon()" oninput="return themduancon()">
			<table class="ban" align="center">
				<tr><?php $maduancon=$_GET['maduancon'];
					$con = new mysqli("localhost","root","","quanlytiendosinhvienthuctap");
					$con->set_charset("utf8");
					$sql="SELECT * FROM duancon WHERE ma_duancon='$maduancon'";
					$result=$con->query($sql);
					while($row=$result->fetch_assoc()){
					$maduancon = $row['ma_duancon'];
					$tenduancon = $row['ten_duancon'];
					$startduancon = $row['start_duancon'];
					$endduancon = $row['end_duancon'];
					$maduancha = $row['ma_duancha'];
					?>
					<p><input type="hidden" name="maduancha" value="<?=$maduancha?>"></p>
					<td>Mã dự án con:</td>
					<td><input type="text" name="maduancon" id="maduancon" value="<?=$maduancon?>" readonly></td>
				</tr><tr><td></td><td><p id="maduanconError" class="error"></p></td></tr><tr><td></td></tr>
				<tr>
					<td>Tên dự án con:</td>
					<td><input type="text" name="tenduancon" id="tenduancon" value="<?=$tenduancon?>"></td>
				</tr><tr><td></td><td><p id="tenduanconError" class="error"></p></td></tr><tr><td></td></tr>
				<tr>
					<td>Ngày bắt đầu:</td>
					<td><input type="date" name="startduancon" id="startduancon" value="<?=$startduancon?>"></td>
				</tr><tr><td></td></tr><tr><td></td></tr>
				<tr>
					<td>Ngày kết thúc:</td>
					<td><input type="date" name="endduancon" id="endduancon" value="<?=$endduancon?>"></td>
				</tr><tr><td></td></tr><tr><td></td></tr>
				<tr>
					<td></td>
					<td>
						<input class="a2" type="submit" value="Sửa">
						<a class="a1" href="danhsachduancon.php?maduan=<?=$maduancha?>"><input class="a2" type="button" value="Trở về"></a>
					</td><?php } ?>
				</tr>
			</table>
		</form>
	</div>
</div>
<script type="text/javascript" src="themduancon.js"></script>
</body>
</html>