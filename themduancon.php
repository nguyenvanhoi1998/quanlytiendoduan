<?php
	header("Cache-Control: no-strore, no-cache, must-revalidate");
?>
<!DOCTYPE HTML>
<html>
<head>
<title> Thêm dự án </title>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
<link href="./css/themduan.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div class="container">
	<div class="content">
		<h1 style="text-align: center;color: blue">Thêm dự án con</h1>
		<form action="Xulythemduancon.php" method="POST" enctype="multipart/form-data">
			<table class="ban" align="center">
				<tr>
					<td>Dự án cha:</td>
					<td>
						<select name="maduancha" id="maduancha">
							<?php	
									$con = new mysqli("localhost","root","","quanlytiendosinhvienthuctap");
									$con->set_charset("utf8");
									$sql="SELECT * FROM duan";
									$result=$con->query($sql);
									while($row=$result->fetch_assoc()){ ?>
									<option value="<?php echo "".$row['ma_duan']."";?>"><?php echo "".$row['ten_duan'].""; } ?></option>
						</select>
					</td>
				</tr><tr><td></td></tr><tr><td></td></tr>
				<tr>
					<td>Mã dự án con:</td>
					<td><input type="text" name="maduancon" id="maduancon"></td>
				</tr><tr><td></td></tr><tr><td></td></tr>
				<tr>
					<td>Tên dự án con:</td>
					<td><input type="text" name="tenduancon" id="tenduancon"></td>
				</tr><tr><td></td></tr><tr><td></td></tr>
				<tr>
					<td>Ngày bắt đầu:</td>
					<td><input type="date" name="startduancon" id="startduancon"></td>
				</tr><tr><td></td></tr><tr><td></td></tr>
				<tr>
					<td>Ngày kết thúc:</td>
					<td><input type="date" name="endduancon" id="endduancon"></td>
				</tr><tr><td></td></tr><tr><td></td></tr>
				<tr>
					<td>Tiến độ %:</td>
					<td><input type="text" name="tiendoduancon" id="tiendoduancon"></td>
				</tr><tr><td></td></tr><tr><td></td></tr>
				<tr>
					<td>File dự án con:</td>
					<td><input type="file" name="fileduancon"></td>
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