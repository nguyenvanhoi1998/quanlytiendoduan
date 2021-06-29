<?php
	header("Cache-Control: no-strore, no-cache, must-revalidate");
?>
<!DOCTYPE HTML>
<html>
<head>
<title> Thêm dự án </title>
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
		<h1 style="text-align: center;color: blue">Thêm dự án</h1>
		<form action="Xulythemduan.php" method="POST" enctype="multipart/form-data" onsubmit="return themduan()" oninput="return themduan()">
			<table class="ban" align="center">
				<tr>
					<td>Mã dự án:</td>
					<td><input type="text" name="maduan" id="maduan" onchange="ajax(this.value)"></td>
				</tr><tr><td></td><td><p id="maduanError" class="error"></p></td></tr><tr><td></td></tr>
				<tr>
					<td>Tên dự án:</td>
					<td><input type="text" name="tenduan" id="tenduan"></td>
				</tr><tr><td></td><td><p id="tenduanError" class="error"></p></tr><tr><td></td></tr>
				<tr>
					<td>Ngày bắt đầu:</td>
					<td><input type="date" name="startduan" id="startduan"></td>
				</tr><tr><td></td><td></tr><tr><td></td></tr>
				<tr>
					<td>Ngày kết thúc:</td>
					<td><input type="date" name="endduan" id="endduan"></td>
				</tr><tr><td></td><td></tr><tr><td></td></tr>
				<tr>
					<td>File dự án:</td>
					<td><input type="file" name="fileduan[]" multiple ></td>
				</tr>
				<tr><td></td></tr><tr><td></td></tr><tr><td></td></tr>
				<tr>
					<td></td>
					<td>
						<input class="a2" type="submit" value="Thêm">
						<a class="a1" href="index.php"><input class="a2" type="button" value="Trang chủ"></a>
					</td>
				</tr>
			</table>
		</form>
	</div>
</div>
<script type="text/javascript" src="themduan.js"></script>
</body>
</html>