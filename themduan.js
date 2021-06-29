let check = true;
function themduan(){
	let maduanValue = document.getElementById("maduan").value;
	let tenduanValue = document.getElementById("tenduan").value;
	
	let maduanError = document.getElementById("maduanError");
	let tenduanError = document.getElementById("tenduanError");
	
	let check = true;

	if(maduanValue === ""){
		maduanError.innerHTML = "Mã dự án không được để trống !";
		check = false;
	} else if(maduanError.innerHTML === "Mã dự án này đã tồn tại"){
		maduanError.innerHTML = "Mã dự án này đã tồn tại";
		check = false;
	} else {
		maduanError.innerHTML = "";
	}
	
	if(tenduanValue != ""){
		tenduanError.innerHTML = "";
	} else {
		tenduanError.innerHTML = "Tên dự án không được để trống !";
		check = false;
	}
	
	return check;
}
function ajax(maduan) {
	var xmlhttp;
	if (window.XMLHttpRequest) {
		xmlhttp=new XMLHttpRequest();
	} else {
		xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
	}
	xmlhttp.onreadystatechange = function() {
		if (xmlhttp.readyState==4 && xmlhttp.status==200) {
			document.getElementById("maduanError").innerHTML = xmlhttp.responseText;
			if(xmlhttp.responseText == "Mã dự án này đã tồn tại"){
				check = false;
				alert("Mã dự án này đã tồn tại. Xin nhập lại mã dự án mới");
			} else {
				check = true;
			}
		}
	}
	xmlhttp.open("GET","ktmaduan.php?maduan=" + maduan,true);
	xmlhttp.send();
}