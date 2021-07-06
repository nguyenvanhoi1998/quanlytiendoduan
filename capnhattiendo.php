<?php
	header("Cache-Control: no-strore, no-cache, must-revalidate");
?>
<!DOCTYPE HTML>
<html>
<head>
<title> Cập nhật tiến độ dự án </title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css">
</head>
<body style="background-image: url('background.jpg');">
<div class="container-fluid">
	<div class="row justify-content-center">
		<form action="Xulycapnhattiendoduancon.php" method="POST" enctype="multipart/form-data">
		<h1 style="text-align: center;color: green">Cập nhật tiến độ dự án</h1><br>
		<div style="border:1px solid blue;border-radius:20px;padding:30px">
			<table align="center">
				<tr>
					<?php $maduancon=$_GET['maduancon'];$maduan=$_GET['maduan'];
					$con = new mysqli("localhost","root","","quanlytiendosinhvienthuctap");
					$con->set_charset("utf8");
					$sql="SELECT * FROM duancon WHERE ma_duancon='$maduancon' AND ma_duancha='$maduan'";
					$result=$con->query($sql);
					while($row=$result->fetch_assoc()){
					$maduancon = $row['ma_duancon'];
					$tenduancon = $row['ten_duancon'];
					$tiendo = $row['tiendo_duancon'];
					?>
					<p><input type="hidden" name="maduan" value="<?=$maduan?>"></p>
					<p><input type="hidden" name="maduancon" value="<?=$maduancon?>"></p>
					<th style="color:blue;">Mã dự án: </th>
					<td><strong><?=$maduancon?></strong></td>
				</tr><tr><td></td><td></td></tr><tr><td></td></tr>
				<tr>
					<th style="color:blue;">Tên dự án: </th>
					<td><strong><?=$tenduancon?></strong></td>
				</tr><tr><td></td><td></tr><tr><td></td></tr>
				<tr>
					<th style="color:blue;">Tiến độ:</th>
					<td><input type="number" name="tiendo" id="tiendo" value="<?=$tiendo?>" min="0" max="100"> %</td>
				</tr><tr><td></td><td></tr><tr><td></td></tr>
				</tr><tr><td></td><td></tr><tr><td></td></tr>
				<tr>
					<td></td>
					<td>
						<input class="btn btn-outline-primary" type="submit" value="Cập nhật">
						<a href="danhsachduancon.php?maduan=<?php echo $maduan; ?>"><input class="btn btn-outline-primary" type="button" value="Trở về"></a>
					</td> <?php } ?>
				</tr>
			</table>
		</div>
		</form>
	</div>
</div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
</body>
</html>