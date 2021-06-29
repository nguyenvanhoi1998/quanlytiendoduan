<?php
	header("Cache-Control: no-strore, no-cache, must-revalidate");
?>
<!DOCTYPE HTML>
<html>
<head>
<title> Thêm file đính kèm theo dự án</title>
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
		<h1 style="text-align: center;color: blue">Thêm file đính kèm theo dự án</h1>
		<form action="Xulythemfile.php" method="POST" enctype="multipart/form-data">
			<table class="ban" align="center">
				<tr>
					<td>Mã dự án:</td>
					<td>
						<select name="maduan" id="maduan">
							<?php $maduan=$_GET['maduan']; ?>
							<option value="<?=$maduan?>"><?=$maduan?></option>
						</select>
					</td>
				</tr><tr><td></td></tr><tr><td></td></tr>
				<tr>
					<td>File thêm:</td>
					<td><input type="file" name="filethem[]" multiple ></td>
				</tr>
				<tr><td></td></tr><tr><td></td></tr><tr><td></td></tr>
				<tr>
					<td></td>
					<td>
						<input class="a2" type="submit" value="Thêm">
						<a class="a1" href="danhsachfiledinhkem.php?maduan=<?=$maduan?>"><input class="a2" type="button" value="Trở về"></a>
					</td>
				</tr>
			</table>
		</form>
	</div>
</div>
</body>
</html>