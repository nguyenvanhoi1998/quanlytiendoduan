<?php 
	header("Cache-Control: no-strore, no-cache, must-revalidate");
?>
<html>
<head>
<title> Shop SmartPhone </title>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
<link href="css/style_index11.css" rel="stylesheet" type="text/css" />
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
					<div id="tk">
					</div>
					<div class="shopping_cart">
					<div class="cart">
					</div>
				</div>
				<div class="login">
				<a href="adminshop.html"><img src="images/admin.jpg" alt="Hình đăng nhập admin" width="70px" height="40px"/></a>
				<a href="dangnhap.html"><img src="images/login.jpg" alt="Hình đăng nhập" width="100px" height="40px"/></a> 
				<a href="dangky.html"><img src="images/dangky.jpg" alt="Hình đăng ký" width="140px" height="40px"/></a>
				</div>
			</div>
		</div>
	</div>
</div>
<a href="index.php"><img class="home" src="images/home.png" width="30px" height="30px"/></a>
<div class="container" style="background-color: white">
	<div id="menu"></div>
</div>
<div></div>
<div class="containers" style="background-color: white">
	<?php
	$masp =$_GET['masp'];
	require'lienket.php';
	$bantv->set_charset("utf8");
	$tdl="SELECT * FROM sanpham WHERE masp='$masp'";
	$result=$bantv->query($tdl);
	if($result->num_rows == 1){
	$row=$result->fetch_assoc();
	echo "<br><h2 class='tensp'>".$row['tensp']."</h2><br>";?>
	<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12" style="background-color: white">
		<div class="image">	
			<img id="img_01" src="<?php echo "".$row['hinhsp']."";?>"data-zoom-image="<?php echo "".$row['hinhsp']."";?>" class="img-responsive" width="330px" height="380px"/>			  			
		<div class="thongtin">
			<h2 class="gia" style="color:Orange"><strong class='tien'><?= number_format($row['giasp'],0,",",".")?> VND</strong></h2><br>
			<h2 style="color:Blue">Thông số kỹ thuật</h2><br>
			<p style="font-size:15"><?php echo "".$row['thongsokythuat'].""; ?></p>
			<br><h3 style="color:red">Cửa hàng còn <?php echo "".$row['soluongsp']."";?> sản phẩm</h3>
		</div>
		</div>
	</div><br><br>
	<h2 class="ttsp" style="color:Blue">Thông tin về sản phẩm</h2>
	<div class="tt"><p><?php echo "".$row['thongtinsp'].""; ?></p></div><br><br>
	<?php } ?>
	<div class="bl">
	<h3 style="color:blue">Bình luận:</h3><br>
	<br></div>
	<div class="hienbl">
	<?php
	$masp =$_GET['masp'];
	require'lienket.php';
	$bantv->set_charset("utf8");
	$tdl="SELECT thanhvien.hovaten, binhluan.* FROM binhluan INNER JOIN thanhvien ON binhluan.tendangnhap = thanhvien.tendangnhap WHERE masp='$masp'";
	$result=$bantv->query($tdl);
	if($result->num_rows > 0){
		while($row=$result->fetch_assoc()){
			echo "<b>".$row['hovaten']." </b>";
			echo "<a>".$row['giongaybl']."</a>";
			echo "<br>";
			echo "<div class='ndbl'><a>".$row['noidungbl']."</a></div>";
			echo "<br><br>";
		}
	}?></div>
</div>

<script type="text/javascript" src="js/jquery.wm-zoom-1.0.min.js"></script>
<script src="js/jquery-3.2.1.slim.js"></script>
<script type="text/javascript" src="js/jquery.elevateZoom-3.0.8.min.js"></script>

<script>
	//initiate the plugin and pass the id of the div containing gallery images
$("#img_01").elevateZoom({constrainType:"height", constrainSize:500, zoomType: "lens", containLensZoom: true, gallery:'gallery_01', cursor: 'pointer', galleryActiveClass: "active"}); 

//pass the images to Fancybox
$("#gallery_01").bind("click", function(e) {  
  var ez =   $('#gallery_01').data('elevateZoom');	
	$.fancybox(ez.getGalleryList());
  return false;
});
</script>
</body>
</html>