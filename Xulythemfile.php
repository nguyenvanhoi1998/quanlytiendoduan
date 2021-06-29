<?php
$maduan = $_POST['maduan'];

$con = new mysqli("localhost","root","","quanlytiendosinhvienthuctap");
$con->set_charset("utf8");

$name = array();
$tmp_name = array();
$error = array();
$type = array();
$size = array();
foreach($_FILES['filethem']['name'] as $file){
	$name[] = $file;
}
foreach($_FILES['filethem']['tmp_name'] as $file){
	$tmp_name[] = $file;
}
foreach($_FILES['filethem']['error'] as $file){
	$error[] = $file;
}
foreach($_FILES['filethem']['type'] as $file){
	$type[] = $file;
}
foreach($_FILES['filethem']['size'] as $file){
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

echo "<script languege='javascript'>alert('Thêm file thành công');location.href='danhsachfiledinhkem.php?maduan=".$maduan."';</script>";
$con->close();
?>