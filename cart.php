<?php
	header("Cache-Control: no-strore, no-cache, must-revalidate");
	session_start();
	require'session.php';
?>
<html>
<head>
<title> Shop SmartPhone </title>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
<link href="css/style_indexdtcart.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="css/jquery.wm-zoom-1.0.min.css">
<link rel="shortcut icon" type="image/png" href="images/logosmartphone.jpg"/>
<body>
<div class="container1">
<a class="ll">HotLine: 0918.109.422</a>
	<div class="wrap">
		<div class="header">
			<div class="header_top">
				<div class="logo">
				<a href="index.php"><img src="images/logosmartphone.jpg"  /></a>
				</div>
				</div>
					<div id="tk">
					</div>
					<?php $tendangnhap=$_SESSION['tendangnhap'];
					$dem=0;
					require'lienket.php';
					$bantv->set_charset("utf8");
					$tdl="SELECT * FROM giohang WHERE tendangnhap='$tendangnhap'";
					$result=$bantv->query($tdl);
					if($result->num_rows > 0){
					while($row=$result->fetch_assoc()){
						$dem+=$row['soluong'];}}
					?>
					<a href="cart.php" title="View my shopping cart" rel="nofollow">
					<div class="shopping_cart">
					<div class="cart">
							<strong class="opencart"></strong>
							<span class="cart_title" style="text-decoration:none;">Giỏ hàng (<?=$dem?>)<span id="cart_sumary"></span>
					</div>
					</div></a>
				<div class="login">
				<img src="images/avatar1.jfif" alt="Avatar" width="50px" height="40px"/>
				<a style="color:yellow"><?php
					require'lienket.php';
					$bantv->set_charset("utf8");
					$tdl="SELECT * FROM thanhvien WHERE (tendangnhap='$tendn') AND (matkhau='$mk')";
					$result=$bantv->query($tdl); 
					if($result->num_rows == 1){
					$row=$result->fetch_assoc();
					echo "".$row['hovaten']."";} else { header('location:dangnhap.html');}
				?></a>
				<a href="dangxuat.php">Đăng xuất</a>
				</div>
			</div>
		</div>
	</div>
</div>
<a href="index1.php"><img class="home" src="images/home.png" width="30px" height="30px"/></a><br>
<h1 style="color:Blue">&nbsp&nbsp&nbsp&nbspGiỏ hàng</h1><a href="Lichsumuahang.php" class="lichsu"><h3>Lịch sử mua hàng</h3></a><br>
<div class="container">
<?php
	$tendangnhap=$_SESSION['tendangnhap'];
	$i=1;
	$sum=0;
	require'lienket.php';
	$bantv->set_charset("utf8");
	$tdl="SELECT sanpham.tensp, sanpham.hinhsp, sanpham.giasp,sanpham.soluongsp, giohang.* FROM sanpham INNER JOIN giohang ON sanpham.masp = giohang.masp WHERE tendangnhap='$tendangnhap'";
	$result=$bantv->query($tdl);
?>
<table class="bang">
	<tr>
		<th>STT</th>
		<th>Tên sản phẩm</th>
		<th>Giá sản phẩm</th>
		<th>Hình sản phẩm</th>
		<th>Số lượng</th>
		<th>Thành tiền</th>
		<th>Lựa chọn</th>
	</tr>
	<?php if($result->num_rows > 0){
		while($row=$result->fetch_assoc()){ ?>
	<tr><form action="suaspgiohang.php" method="POST"> 
		<p><input type="hidden" name="masp" value="<?php echo "".$row['masp']."";?>"></p>
		<p><input type="hidden" name="tien" value="<?php echo "".$row['giasp']."";?>"></p>
		<td><?php echo "".$i++.""; ?></td>
		<td style="width:230px;"><?php echo "".$row['tensp'].""; ?></td>
		<td><?= number_format($row['giasp'],0,",",".")?> VND</td>
		<td><img src='<?php echo "".$row['hinhsp'].""; ?>' width="90px" height="110px"/></td>
		<td><input class="sl" type="number" max="<?php echo "".$row['soluongsp']."";?>" min="1" value="<?php echo "".$row['soluong'].""; ?>" name="soluong" size="4"/></td></td>
		<td><?= number_format($row['thanhtien'],0,",",".")?> VND<?php $sum+=$row['thanhtien']; ?></td>
		<td><input class='a2' type='submit' value='Sửa'>&nbsp <a class='a1' href='xoaspgiohang.php?masp=<?php echo "".$row['masp']."";?>'><input class='a2' type='button' value='Xóa'></a></td>
	</tr></form><?php } }
	?>
	<tr>
		<th></th>
		<th>Tổng tiền:</th>
		<th></th>
		<th></th>
		<th></th>
		<th><?= number_format($sum,0,",",".")?> VND</th>
		<th></th>
	</tr>
</table>
</div>
<div class="containers">
<br><h2 style="color:Blue">Điền đầy đủ thông tin của bạn</h2><br>
	<form action="Xulyhoadon.php" method="POST">
		<p><input type="hidden" name="tongtien" value="<?php echo $sum; ?>"></p>
		<table align="center">
			<tr>
				<td>Người nhận hàng:</td>
				<td><input required="" type="text" name="hovaten" id="hovaten" onchange="ajax(this.value)"></td>
			</tr>
			<tr>
				<td>Số điện thoại:</td>
				<td><input required="" type="text" name="sodienthoai" id="sodienthoai"></td>
			</tr>
			<tr>
				<td>Địa chỉ:</td>
				<td><textarea required="" name="diachi" id="diachi" style="width:400px; height:50px; resize: none;"></textarea></td>
			</tr>
			<tr>
				<td>Ghi chú:</td>
				<td><textarea name="ghichu" id="ghichu" style="width:400px; height:50px; resize: none;"></textarea></td>
			</tr>
			<tr>
				<td></td>
				<td>
					<input class="a3" type="submit" value="Thanh toán">
				</td>
			</tr>
		</table>
	</form><br><br>
</div>
</body>
</html>