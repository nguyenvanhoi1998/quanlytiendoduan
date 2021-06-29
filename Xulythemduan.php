<?php
$maduan = $_POST['maduan'];
$tenduan = $_POST['tenduan'];
$startduan = $_POST['startduan'];
$endduan = $_POST['endduan'];
$tiendoduan = 0;

$con = new mysqli("localhost","root","","quanlytiendosinhvienthuctap");
$con->set_charset("utf8");

$sql = "INSERT INTO duan(ma_duan,ten_duan,start_duan,end_duan,tiendo_duan) VALUE ('$maduan','$tenduan','$startduan','$endduan','$tiendoduan')";
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
	$upload_file = $filename;
	if(move_uploaded_file($tmp_name[$i],$upload_file)){
		$sql = "INSERT INTO fileduan(ma_duan,tenfile,kieufile) VALUE ('$maduan','$name[$i]','$type[$i]')";
		$result = $con->query($sql);
	}
}

echo "<script languege='javascript'>alert('Thêm dự án thành công');location.href='index.php';</script>";
$con->close();
?>