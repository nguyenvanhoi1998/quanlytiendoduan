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
$kieufile=array('jpg','png','doc','docx','xls','xlsx','pdf','zip','7z');

for($i=0;$i<count($name);$i++){
	$sql="SELECT * FROM fileduan WHERE ma_duan='$maduan'";
	$result=$con->query($sql);
	while($row=$result->fetch_assoc()){
		$tenfile = $row['tenfile'];
		if($name[$i] == $tenfile){
			echo "<script languege='javascript'>alert('File này đã tồn tại trong dự án');location.href='danhsachfiledinhkem.php?maduan=".$maduan."';</script>";
			$con->close();
		}
	}
}

for($i=0;$i<count($name);$i++){
	$duoi=strtolower(pathinfo($name[$i],PATHINFO_EXTENSION));
	if (!in_array($duoi,$kieufile)) {
		echo "<script languege='javascript'>alert('File không được hổ trợ');location.href='danhsachfiledinhkem.php?maduan=".$maduan."';</script>"; } else {
		$temp = preg_split('/[\/\\\\]+/',$name[$i]);
		$filename = $temp[count($temp)-1];
		$upload_dir = "../quanlytiendoduan/";
		$upload_file = $upload_dir . $filename;
		if(move_uploaded_file($tmp_name[$i],$upload_file)){
			$sql = "INSERT INTO fileduan(ma_duan,tenfile,kieufile) VALUE ('$maduan','$name[$i]','$type[$i]')";
			$result = $con->query($sql);
			echo "<script languege='javascript'>alert('Thêm file thành công');location.href='danhsachfiledinhkem.php?maduan=".$maduan."';</script>";
		}
	}
}

$con->close();
?>