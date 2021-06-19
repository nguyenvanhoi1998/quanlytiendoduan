<html>
	<head>
		<script type="text/javascript" src="http://www.gstatic.com/charts/loader.js"></script>
		<script type="text/javascript">
			google.charts.load('current' ,{'packages':['gantt']});
			google.charts.setOnLoadCallback(drawChart);
			function daysToMilliseconds(days){
				return days*24*60*60*1000;
			} 
			function drawChart(){
				var data = new google.visualization.DataTable();
				data.addColumn('string','Ma du an');
				data.addColumn('string','Ten du an'); 
				data.addColumn('date','Start Date');
				data.addColumn('date','End Date');
				data.addColumn('number','Duration');
				data.addColumn('number','Phan tram');
				data.addColumn('string','Lien ket');
				data.addRows([<?php $con = new mysqli("localhost","root","","quanlytiendosinhvienthuctap");
									$con->set_charset("utf8");
									$sql = "SELECT * FROM duan";
									$result=$con->query($sql);
									while($row=$result->fetch_assoc()){
									$maduan = $row['ma_duan'];
									$tenduan = $row['ten_duan'];
									$startduan = $row['start_duan'];
									$endduan = $row['end_duan'];
									$tiendoduan = $row['tiendo_duan']; ?>
					['<?php echo $maduan; ?>','<?php echo $tenduan;?>',new Date(<?php echo $startduan; ?>),new Date(<?php echo $endduan; ?>),null,<?php echo $tiendoduan; ?>,null]
					 <?php } ?>
					 ]);
				var options={height:275};
				var chart=new google.visualization.Gantt(document.getElementById('chart_div'));
				chart.draw(data,options);
			}
		</script>
	</head>
	<body>
		<div id="chart_div"></div>
	</body>
</html>