<?php
$maduan = $_POST['maduan'];
$tenduan = $_POST['tenduan'];
$startduan = date_create("".$_POST['startduan']."");
$startduanmoi = date_format($startduan,"Y,m,d");
$endduan = date_create("".$_POST['endduan']."");
$endduanmoi = date_format($endduan,"Y,m,d");
$tiendoduan = $_POST['tiendoduan'];

$con = new mysqli("localhost","root","","quanlytiendosinhvienthuctap");
$con->set_charset("utf8");

$sql = "INSERT INTO duan(ma_duan,ten_duan,start_duan,end_duan,tiendo_duan) VALUE ('$maduan','$tenduan','$startduanmoi','$endduanmoi','$tiendoduan')";
$result = $con->query($sql);

$name = array();
$tmp_name = array();
$error = array();
$type = array();
$size = array();
foreach($_FILES['fileduan']['name'] as $file){
	$name[] = $file;
}
foreach($_FILES['fileduan']['tmp_name'] as $file){
	$tmp_name[] = $file;
}
foreach($_FILES['fileduan']['error'] as $file){
	$error[] = $file;
}
foreach($_FILES['fileduan']['type'] as $file){
	$type[] = $file;
}
foreach($_FILES['fileduan']['size'] as $file){
	$size[] = round($file/1024,2);
}
for($i=0;$i<count($name);$i++){
	$temp = preg_split('/[\/\\\\]+/',$name[$i]);
	$filename = $temp[count($temp)-1];
	$upload_dir = "./Quanlytiendosinhvienthuctap/";
	$upload_file = $upload_dir.$filename;
	if(move_uploaded_file($tmp_name[$i],$upload_file)){
		$sql = "INSERT INTO fileduan(ma_duan,tenfile,kichthuoc,vitrifile) VALUE ('$maduan','$name[$i]','$size[$i]','$upload_dir')";
		$result = $con->query($sql);
	}
}

echo "<script languege='javascript'>alert('Thêm dự án thành công');location.href='themduan.php';</script>";
$con->close();
?>