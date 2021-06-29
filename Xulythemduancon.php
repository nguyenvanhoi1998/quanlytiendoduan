<?php
$maduancon = $_POST['maduancon'];
$tenduancon = $_POST['tenduancon'];
$startduancon = $_POST['startduancon'];
$endduancon = $_POST['endduancon'];
$tiendoduancon = 0;
$maduancha = $_POST['maduancha'];

$con = new mysqli("localhost","root","","quanlytiendosinhvienthuctap");
$con->set_charset("utf8");
$sql = "INSERT INTO duancon(ma_duancon,ten_duancon,start_duancon,end_duancon,tiendo_duancon,ma_duancha) VALUE ('$maduancon','$tenduancon','$startduancon','$endduancon','$tiendoduancon','$maduancha')";
$result = $con->query($sql);

$name = array();
$tmp_name = array();
$error = array();
$type = array();
$size = array();
foreach($_FILES['fileduancon']['name'] as $file){
	$name[] = $file;
}
foreach($_FILES['fileduancon']['tmp_name'] as $file){
	$tmp_name[] = $file;
}
foreach($_FILES['fileduancon']['error'] as $file){
	$error[] = $file;
}
foreach($_FILES['fileduancon']['type'] as $file){
	$type[] = $file;
}
foreach($_FILES['fileduancon']['size'] as $file){
	$size[] = round($file/1024,2);
}
for($i=0;$i<count($name);$i++){
	$temp = preg_split('/[\/\\\\]+/',$name[$i]);
	$filename = $temp[count($temp)-1];
	$upload_file = $filename;
	if(move_uploaded_file($tmp_name[$i],$upload_file)){
		$sql = "INSERT INTO fileduan(ma_duan,tenfile,kieufile) VALUE ('$maduancon','$name[$i]','$type[$i]')";
		$result = $con->query($sql);
	}
}

echo "<script languege='javascript'>alert('Thêm dự án con thành công');location.href='themduancon.php';</script>";
$con->close();
?>