let check = true;
function themduancon(){
	let maduanconValue = document.getElementById("maduancon").value;
	let tenduanconValue = document.getElementById("tenduancon").value;
	
	let maduanconError = document.getElementById("maduanconError");
	let tenduanconError = document.getElementById("tenduanconError");
	
	let check = true;

	if(maduanconValue === ""){
		maduanconError.innerHTML = "Mã dự án con không được để trống !";
		check = false;
	} else if(maduanconError.innerHTML === "Mã dự án con này đã tồn tại"){
		maduanconError.innerHTML = "Mã dự án con này đã tồn tại";
		check = false;
	} else {
		maduanconError.innerHTML = "";
	}
	
	if(tenduanconValue != ""){
		tenduanconError.innerHTML = "";
	} else {
		tenduanconError.innerHTML = "Tên dự án con không được để trống !";
		check = false;
	}
	
	return check;
}
function ajax(maduancon) {
	var xmlhttp;
	if (window.XMLHttpRequest) {
		xmlhttp=new XMLHttpRequest();
	} else {
		xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
	}
	xmlhttp.onreadystatechange = function() {
		if (xmlhttp.readyState==4 && xmlhttp.status==200) {
			document.getElementById("maduanconError").innerHTML = xmlhttp.responseText;
			if(xmlhttp.responseText == "Mã dự án con này đã tồn tại"){
				check = false;
				alert("Mã dự án con này đã tồn tại. Xin nhập lại mã dự án con mới");
			} else {
				check = true;
			}
		}
	}
	xmlhttp.open("GET","ktmaduancon.php?maduancon=" + maduancon,true);
	xmlhttp.send();
}