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
				data.addRows([['quan01','Dự án cha',new Date(2021,06,14),new Date(2021,06,17),null,100,null],
					['quan01con','Tạo dự án',null,new Date(2021,6,18),daysToMilliseconds(1),100,'quan01'],
					['quan02con','Tạo dự án',null,new Date(2021,6,23),daysToMilliseconds(5),70,'quan01con'],
					['quan03con','Tạo dự án',null,new Date(2021,6,24),daysToMilliseconds(1),50,'quan01con'],
					['quan04con','Tạo dự án',null,new Date(2021,6,25),daysToMilliseconds(2),70,'quan02con'],
					['quan05con','Tạo dự án',null,new Date(2021,6,29),daysToMilliseconds(12),100,'quan01']]);
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