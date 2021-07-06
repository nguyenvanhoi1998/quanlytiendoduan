<?php
	header("Cache-Control: no-strore, no-cache, must-revalidate");
?>
<!DOCTYPE HTML>
<html>
<head>
<title> Thêm dự án </title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css">
</head>
<body style="background-image: url('background.jpg');">
<div class="container-fluid">
	<div class="row justify-content-center">
		<form action="Xulythemduan.php" method="POST" enctype="multipart/form-data" onsubmit="return themduan()" oninput="return themduan()">
		<h1 style="text-align: center;color: green">Thêm dự án</h1><br>
		<div style="border:1px solid blue;border-radius:20px;padding:30px">
			<table>
				<tr>
					<th style="color:blue;">Mã dự án: </th>
					<td><input type="text" name="maduan" id="maduan" onchange="ajax(this.value)"></td>
				</tr><tr><td></td><td><p style="color:red" id="maduanError" class="error"></p></td></tr><tr><td></td></tr>
				<tr>
					<th style="color:blue;">Tên dự án: </th>
					<td><textarea name="tenduan" id="tenduan" style="width:300px; height:150px;"></textarea></td>
				</tr><tr><td></td><td><p style="color:red" id="tenduanError" class="error"></p></tr><tr><td></td></tr>
				<tr>
					<th style="color:blue;">Ngày bắt đầu: </th>
					<td><input type="date" name="startduan" id="startduan" min="2021-06-14" max="2021-08-06"></td>
				</tr><tr><td></td><td></tr><tr><td></td></tr>
				<tr>
					<th style="color:blue;">Ngày kết thúc: </th>
					<td><input type="date" name="endduan" id="endduan" min="2021-06-14" max="2021-08-06"></td>
				</tr><tr><td></td><td></tr><tr><td></td></tr><tr><td></td></tr><tr><td></td></tr><tr><td></td></tr>
				<tr>
					<th style="color:blue;">File dự án: </th>
					<td><input type="file" name="fileduan[]" multiple ></td>
				</tr>
				<tr><td></td></tr><tr><td></td></tr><tr><td></td></tr><tr><td></td></tr><tr><td></td></tr><tr><td></td></tr>
				<tr><td></td></tr><tr><td></td></tr><tr><td></td></tr><tr><td></td></tr><tr><td></td></tr><tr><td></td></tr>
				<tr>
					<td></td>
					<td>
						<input class="btn btn-outline-primary" type="submit" value="Thêm">
						<a href="index.php"><input class="btn btn-outline-primary" type="button" value="Trang chủ"></a>
					</td>
				</tr>
			</table>
		</div>
		</form>
	</div>
</div>
<script type="text/javascript" src="themduan.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
</body>
</html>