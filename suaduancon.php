<?php
	header("Cache-Control: no-strore, no-cache, must-revalidate");
?>
<!DOCTYPE HTML>
<html>
<head>
<title> Sửa thông tin dự án con </title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css">
</head>
<body style="background-image: url('background.jpg');">
<div class="container-fluid">
	<div class="row justify-content-center">
		<form action="Xulysuaduancon.php" method="POST" enctype="multipart/form-data" onsubmit="return themduancon()" oninput="return themduancon()">
		<h1 style="text-align: center;color: green">Sửa thông tin dự án con</h1><br>
		<div style="border:1px solid blue;border-radius:20px;padding:30px">
			<table align="center">
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
					<th style="color:blue;">Mã dự án con: </th>
					<td><input type="text" name="maduancon" id="maduancon" value="<?=$maduancon?>" readonly></td>
				</tr><tr><td></td><td><p style="color:red" id="maduanconError" class="error"></p></td></tr><tr><td></td></tr>
				<tr>
					<th style="color:blue;">Tên dự án: </th>
					<td><textarea name="tenduancon" id="tenduancon" style="width:300px; height:150px;"><?=$tenduancon?></textarea></td>
				</tr><tr><td></td><td><p style="color:red" id="tenduanconError" class="error"></p></td></tr><tr><td></td></tr>
				<tr>
					<th style="color:blue;">Ngày bắt đầu: </th>
					<td><input type="date" name="startduancon" id="startduancon" min="2021-06-14" max="2021-08-06" value="<?=$startduancon?>"></td>
				</tr><tr><td></td></tr><tr><td></td></tr>
				<tr>
					<th style="color:blue;">Ngày kết thúc: </th>
					<td><input type="date" name="endduancon" id="endduancon" min="2021-06-14" max="2021-08-06" value="<?=$endduancon?>"></td>
				</tr><tr><td></td></tr><tr><td></td></tr></tr><tr><td></td></tr><tr><td></td></tr>
				</tr><tr><td></td></tr><tr><td></td></tr></tr><tr><td></td></tr><tr><td></td></tr>
				<tr>
					<td></td>
					<td>
						<input class="btn btn-outline-primary" type="submit" value="Sửa">
						<a href="danhsachduancon.php?maduan=<?=$maduancha?>"><input class="btn btn-outline-primary" type="button" value="Trở về"></a>
						<a href="index.php"><input class="btn btn-outline-primary" type="button" value="Trang chủ"></a>
					</td><?php } ?>
				</tr>
			</table>
		</div>
		</form>
	</div>
</div>
<script type="text/javascript" src="themduancon.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
</body>
</html>