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
				width: 150px;
				height: 30px;
				border: none;
				background: yellow;
				color: black;
				border-radius: 5px 5px;
			}
			.a1 {
				text-decoration: none;
				color: black;
			}
			.a2:hover{
				background: black;
				color: yellow;
			}
			.a1:hover{
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
				data.addRows([ <?php $con = new mysqli("localhost","root","","quanlytiendosinhvienthuctap");
									$con->set_charset("utf8");
									$sql = "SELECT * FROM duan";
									$result=$con->query($sql);
									while($row=$result->fetch_assoc()){
									$maduan = $row['ma_duan'];
									$tenduan = $row['ten_duan'];
									$startduan = $row['start_duan'];
									$endduan = $row['end_duan'];
									$tiendoduan = $row['tiendo_duan']; ?>
					['<?php echo $maduan; ?>','<?php echo $tenduan;?>',new Date(<?php echo $startduan; ?>),new Date(<?php echo $endduan; ?>),null,<?php echo $tiendoduan; ?>,null],
					<?php $sql0 = "SELECT * FROM duancon";
					$result0=$con->query($sql0);
					while($row0=$result0->fetch_assoc()){
						$maduancon = $row0['ma_duancon'];
						$tenduancon = $row0['ten_duancon'];
						$startduancon = $row0['start_duancon'];
						$endduancon = $row0['end_duancon'];
						$tiendoduancon = $row0['tiendo_duancon'];
						$maduancha = $row0['ma_duancha']; ?>
						['<?php echo $maduancon; ?>','<?php echo $tenduancon;?>',new Date(<?php echo $startduancon; ?>),new Date(<?php echo $endduancon; ?>),null,<?php echo $tiendoduancon; ?>,'<?php echo $maduancha; ?>'],
					 <?php } } ?>
					 ]);
				var options={height:275};
				var chart=new google.visualization.Gantt(document.getElementById('chart_div'));
				chart.draw(data,options);
			}
		</script>
	</head>
	<body><br>
		<h1 style="color:green;text-align:center;">Tiến độ của dự án</h1><br>
		<div id="chart_div"></div><br>
		<a class="a1" href="capnhatduancha.php"><input class="a2" type="button" value="Cập nhật dự án cha"></a>
		<a class="a1" href="capnhatduancon.php"><input class="a2" type="button" value="Cập nhật dự án con"></a>
		<a class="a1" href="index.php"><input class="a2" type="button" value="Trang chủ"></a>
	</body>
</html>