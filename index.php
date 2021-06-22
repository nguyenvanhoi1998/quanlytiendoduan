<?php
	header("Cache-Control: no-strore, no-cache, must-revalidate");
?>
<!DOCTYPE HTML>
<html>
<head>
<title> Trang chủ </title>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
<link href="./css/index.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div class="container">
	<div class="content">
		<h1 class="theh1">Quản lý dự án</h1><br><br>
		<div id="menu">
			<ul>
				<li>
					<a style="border-bottom: 1px dotted yellow;" href="themduan.php">Thêm dự án mới</a>
					<a style="border-bottom: 1px dotted yellow;" href="themduancon.php">Thêm dự án con mới</a>
					<a href="tiendoduan.php">Tiến độ của dự án</a>
				</li>
			</ul>
		</div>
	</div>
</div>
</body>
</html>