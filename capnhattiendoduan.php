<?php
	header("Cache-Control: no-strore, no-cache, must-revalidate");
?>
<!DOCTYPE HTML>
<html>
<head>
<title> Cập nhật tiến độ dự án </title>
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
		<h1 style="text-align: center;color: blue">Cập nhật tiến độ dự án</h1>
		<form action="Xulycapnhattiendoduan.php" method="POST" enctype="multipart/form-data">
			<table class="ban" align="center">
				<tr>
					<?php $maduan=$_GET['maduan'];
					$con = new mysqli("localhost","root","","quanlytiendosinhvienthuctap");
					$con->set_charset("utf8");
					$sql="SELECT * FROM duan WHERE ma_duan='$maduan'";
					$result=$con->query($sql);
					while($row=$result->fetch_assoc()){
					$maduan = $row['ma_duan'];
					$tenduan = $row['ten_duan'];
					$tiendo = $row['tiendo_duan'];
					?>
					<td>Mã dự án: </td>
					<p><input type="hidden" name="maduan" value="<?=$maduan?>"></p>
					<p><input type="hidden" name="tenduan" value="<?=$tenduan?>"></p>
					<td><strong style="color:black;"><?=$maduan?></strong></td>
				</tr><tr><td></td><td></td></tr><tr><td></td></tr>
				<tr>
					<td>Tên dự án:</td>
					<td><strong style="color:black;"><?=$tenduan?></strong></td>
				</tr><tr><td></td><td></tr><tr><td></td></tr>
				<tr>
					<td>Tiến độ:</td>
					<td><input type="number" name="tiendo" id="tiendo" value="<?=$tiendo?>" min="0" max="100"></td>
				</tr><tr><td></td><td></tr><tr><td></td></tr>
				<tr>
					<td></td>
					<td>
						<input class="a2" type="submit" value="Cập nhật">
						<a class="a1" href="index.php"><input class="a2" type="button" value="Trở về"></a>
					</td> <?php } ?>
				</tr>
			</table>
		</form>
	</div>
</div>
</body>
</html>