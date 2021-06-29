<html>
	<head>
		<title> Tiến độ của dự án </title>
		<style>
			*{
				margin: 0;
				padding: 0;
			}
			body {
				padding: 0px;
				margin: 0px;
				background-image: url("background.jpg");
				font-family: Arial, Times New Roman;
				font-size: 13px;
			}
			.a2 {
				text-align: center;
				width: 100px;
				height: 30px;
				border: none;
				background: #2a4fa4;
				color: white;
				border-radius: 5px 5px;
			}
			.a1 {
				text-decoration: none;
				color: white;
				margin-left: 10px;
			}
			.a2:hover{
				background: black;
				color: yellow;
			}
			.a1:hover{
				background: black;
				color: yellow;
			}
			.a22 {
				text-align: center;
				width: 150px;
				height: 30px;
				border: none;
				background: #2a4fa4;
				color: white;
				border-radius: 5px 5px;
			}
			.a22:hover{
				background: black;
				color: yellow;
			}
		</style>
		<script type="text/javascript" src="//www.gstatic.com/charts/loader.js"></script>
		<script type="text/javascript">
			google.charts.load('current' ,{'packages':['gantt']});
			google.charts.setOnLoadCallback(drawChart);
			function drawChart(){
				var data = new google.visualization.DataTable();
				data.addColumn('string','Ma du an');
				data.addColumn('string','Ten du an'); 
				data.addColumn('date','Start Date');
				data.addColumn('date','End Date');
				data.addColumn('number','Duration');
				data.addColumn('number','Phan tram');
				data.addColumn('string','Lien ket');
				data.addRows([ <?php $maduan0 = $_GET['maduan'];
					$con = new mysqli("localhost","root","","quanlytiendosinhvienthuctap");
					$con->set_charset("utf8");
					$sql = "SELECT * FROM duan WHERE ma_duan='$maduan0'";
					$result=$con->query($sql);
					while($row=$result->fetch_assoc()){
					$maduan = $row['ma_duan'];
					$tenduan = $row['ten_duan'];
					$startduan = date_create("".$row['start_duan']."");
					$startduanmoi = date_format($startduan,"Y,m,d");
					$endduan = date_create("".$row['end_duan']."");
					$endduanmoi = date_format($endduan,"Y,m,d");
					$tiendoduan = $row['tiendo_duan']; ?>
					['<?php echo $maduan; ?>','<?php echo $tenduan;?>',new Date(<?php echo $startduanmoi; ?>),new Date(<?php echo $endduanmoi; ?>),null,<?php echo $tiendoduan; ?>,null],
					<?php $sql0 = "SELECT * FROM duancon WHERE ma_duancha='$maduan'";
					$result0=$con->query($sql0);
					while($row0=$result0->fetch_assoc()){
						$maduancon = $row0['ma_duancon'];
						$tenduancon = $row0['ten_duancon'];
						$startduancon = date_create("".$row0['start_duancon']."");
						$startduanconmoi = date_format($startduancon,"Y,m,d");
						$endduancon = date_create("".$row0['end_duancon']."");
						$endduanconmoi = date_format($endduancon,"Y,m,d");
						$tiendoduancon = $row0['tiendo_duancon'];
						$maduancha = $row0['ma_duancha']; ?>
						['<?php echo $maduancon; ?>','<?php echo $tenduancon;?>',new Date(<?php echo $startduanconmoi; ?>),new Date(<?php echo $endduanconmoi; ?>),null,<?php echo $tiendoduancon; ?>,null],
					 <?php } } ?>
					 ]);
				var options={height:450};
				var chart=new google.visualization.Gantt(document.getElementById('chart_div'));
				chart.draw(data,options);
			}
		</script>
	</head>
	<body><br>
		<h1 style="color:green;text-align:center;">Tiến độ của dự án</h1><br>
		<div id="chart_div"></div><br>
		<a class="a1" href="index.php"><input class="a2" type="button" value="Trang chủ"></a>
		<a class="a1" href="danhsachduancon.php?maduan=<?php echo $maduan0; ?>"><input class="a22" type="button" value="Danh sách dự án con"></a>
	</body>
</html>