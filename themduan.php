<?php
	header("Cache-Control: no-strore, no-cache, must-revalidate");
?>
<!DOCTYPE HTML>
<html>
<head>
<title> Thêm dự án </title>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
<link href="themduan.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div class="container">
	<div class="content">
		<h1 style="text-align: center;color: blue">Thêm dự án</h1>
		<form action="Xulythemduan.php" method="POST" enctype="multipart/form-data">
			<table class="ban" align="center">
				<tr>
					<td>Mã dự án:</td>
					<td><input type="text" name="maduan" id="maduan"></td>
				</tr><tr><td></td></tr><tr><td></td></tr>
				<tr>
					<td>Tên dự án:</td>
					<td><input type="text" name="tenduan" id="tenduan"></td>
				</tr><tr><td></td></tr><tr><td></td></tr>
				<tr>
					<td>Ngày bắt đầu:</td>
					<td><input type="date" name="startduan" id="startduan"></td>
				</tr><tr><td></td></tr><tr><td></td></tr>
				<tr>
					<td>Ngày kết thúc:</td>
					<td><input type="date" name="endduan" id="endduan"></td>
				</tr><tr><td></td></tr><tr><td></td></tr>
				<tr>
					<td>Tiến độ %:</td>
					<td><input type="text" name="tiendoduan" id="tiendoduan"></td>
				</tr><tr><td></td></tr><tr><td></td></tr>
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
</body>
</html>