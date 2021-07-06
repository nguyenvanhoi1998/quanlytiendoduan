<?php
	header("Cache-Control: no-strore, no-cache, must-revalidate");
	session_start();
?>
<!DOCTYPE HTML>
<head>
<title> Shop SmartPhone </title>
<link rel="shortcut icon" type="image/png" href="images/logosmartphone.jpg"/>
<style>
	.khung {
		margin-left: 400px;
		width: 800px;
		height: auto;
		z-index: 100;
	}
	.a2 {
		text-align: center;
		width: 130px;
		height: 30px;
		border: none;
		background: #2a4fa4;
		color: white;
		border-radius: 5px 5px;
		margin-left: 600px;
		margin-top: 10px;
		z-index: 100;
	}
	.a2:hover {
		background: black;
		color: yellow;
		z-index: 100;
	}
	.bang {
		border-bottom: 1px solid black;
	}
</style>
</head>
<body>
<?php
	require'session.php';
	$tendangnhap=$_SESSION['tendangnhap'];
	require'lienket.php';
	$bantv->set_charset("utf8");
	$tdl="SELECT * FROM thanhvien WHERE (tendangnhap='$tendn') AND (matkhau='$mk')";
	$result=$bantv->query($tdl); 
	if($result->num_rows == 1){
	$row=$result->fetch_assoc();?>
		<h2 style="color:Blue" align="center">Lịch sử mua hàng</h2>
		<div class="khung">
		<strong>Chủ tài khoản: </strong><a>&nbsp&nbsp&nbsp&nbsp<?=$row['hovaten']?></a><br><br>
			<?php $tdl="SELECT * FROM thongtinmuahang WHERE tendangnhap='$tendangnhap'";
			$result=$bantv->query($tdl);
			if($result->num_rows > 0){ while($row=$result->fetch_assoc()){ 
				$mamhmoi=$row['mamh'];
			?>
			<table class="bang">
				<tr>
					<td><strong>Mã hóa đơn: </strong></td>
					<td><?=$row['mamh']?></td>
					<td><strong>Tình trạng: </strong></td>
					<td><?=$row['duyet']?></td>
					<td><strong>&nbsp&nbsp Thanh toán: </strong></td>
					<td><?=$row['thanhtoan']?></td>
				</tr>
				<tr>
					<td></td>
				</tr>
				<tr>
					<td><strong>Ngày mua hàng: </strong></td>
					<td><?=$row['ngaygio']?></td>
				</tr>
				<tr>
					<td></td>
				</tr>
				<tr>
					<td><strong>Tên sản phẩm</strong></td>
					<td><strong>Giá</strong></td>
					<td><strong>Số lượng</strong></td>
					<td>&nbsp&nbsp&nbsp&nbsp&nbsp </strong></td>
					<td><strong>Thành tiền</strong></td>
				</tr>
				<tr>
					<td></td>
				</tr><?php
				$tdl1="SELECT * FROM hoadon WHERE mamh='$mamhmoi'";
				$result1=$bantv->query($tdl1);
				if($result1->num_rows > 0){ 
				while($row1=$result1->fetch_assoc()){ ?>
				<tr>
					<td><?=$row1['tensanpham']?>&nbsp&nbsp&nbsp&nbsp&nbsp</td>
					<td><?= number_format($row1['giasanpham'],0,",",".")?> VND</td>
					<td><?=$row1['soluongsanpham']?></td>
					<td>&nbsp&nbsp&nbsp&nbsp&nbsp </td>
					<td><?= number_format($row1['thanhtien'],0,",",".")?> VND</td>
				</tr><?php } } ?>
				<tr>
					<td></td>
				</tr>
				<tr>
					<td></td>
					<td></td>
					<td></td>
					<td>&nbsp&nbsp&nbsp&nbsp&nbsp </td>
					<td><strong>Tổng tiền</strong></td>
				</tr>
				<tr>
					<td></td>
					<td></td>
					<td></td>
					<td>&nbsp&nbsp&nbsp&nbsp&nbsp </td>
					<td><?= number_format($row['tongtien'],0,",",".")?> VND</td>
				</tr>
			</table><?php } } ?>
		</div>
		<a href="cart.php"><input type="button" class="a2" value="Trở về"/></a>
	<?php } else { header('location:dangnhap.html'); }
	$bantv->close();
?>
</body>