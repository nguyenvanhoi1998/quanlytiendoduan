<?php
	header("Cache-Control: no-strore, no-cache, must-revalidate");
?>
<!DOCTYPE HTML>
<html>
<head>
<title> Thêm file đính kèm theo dự án</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css">
</head>
<body style="background-image: url('background.jpg');">
<div class="container-fluid">
	<div class="row justify-content-center">
		<form action="Xulythemfile.php" method="POST" enctype="multipart/form-data">
		<h1 style="text-align: center;color: green">Thêm file đính kèm theo dự án</h1><br>
		<div style="border:1px solid blue;border-radius:20px;padding:20px">
			<table class="ban" align="center">
				<tr>
					<th style="color:blue;">Mã dự án: </th>
					<td>
						<select name="maduan" id="maduan">
							<?php $maduan=$_GET['maduan']; ?>
							<option value="<?=$maduan?>"><?=$maduan?></option>
						</select>
					</td>
				</tr><tr><td></td></tr><tr><td></td></tr>
				<tr>
					<th style="color:blue;">Thêm File: </th>
					<td><input type="file" name="filethem[]" multiple ></td>
				</tr>
				<tr><td></td></tr><tr><td></td></tr><tr><td></td></tr><tr><td></td></tr><tr><td></td></tr><tr><td></td></tr>
				<tr><td></td></tr><tr><td></td></tr><tr><td></td></tr><tr><td></td></tr><tr><td></td></tr><tr><td></td></tr>
				<tr>
					<td></td>
					<td>
						<input class="btn btn-outline-primary" type="submit" value="Thêm">
						<a href="danhsachfiledinhkem.php?maduan=<?=$maduan?>"><input class="btn btn-outline-primary" type="button" value="Trở về"></a>
					</td>
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