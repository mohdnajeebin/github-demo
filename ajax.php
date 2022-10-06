<html>
<head>
	<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
	<style>
		.button
		{
			border: none;
			padding: 15px 32px;
			text-align: center;
			display: inline-block;
			font-size: 16px;
			margin: 4px 2px;
			cursor: pointer;
		}

		.button1 {background-color: #ff0000;}
		.button2 {background-color: #f2f2f2;}
		.button3 {background-color: #f2f2f2;}
		.button2 {background-color: #f2f2f2;}
		.button3 {background-color: #f2f2f2;}
		.button2 {background-color: #f2f2f2;}
		.button3 {background-color: #f2f2f2;}

		.top-band
		{
		  background-color: rgb(204, 204, 255);
		  width: 100%;
		  height:50px;
		  position: relative;
		}
		header img{
      width: 150px;
      margin: 5px 15px;
    }


	</style>

	<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
	<script type="text/javascript">

		function buttonpress(n,m)
		{
			const files = ['1_Image.txt','2_Image.txt','3_Image.txt','4_Image.txt','5_Image.txt','6_Image.txt','7_Image.txt'];
			for(let i=1;i<=m;i++)
			{
			document.getElementById('b'+i).style.backgroundColor = '#f2f2f2';
			}
			document.getElementById('b'+n).style.backgroundColor = '#e5cae8 ';
			readTable(files[n-1]);
		}

		function readTable(f)
		{
			//alert(f);
			var xmlhttp = new XMLHttpRequest();
			//var file = '1_Image.txt';
			xmlhttp.onreadystatechange = function()
			{
				if (this.readyState == 4 && this.status == 200)
				{
					document.getElementById("result").innerHTML = this.responseText;
				}
			}
			xmlhttp.open("GET","test.php?INP="+f, true);
			//xmlhttp.send();
			xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
			xmlhttp.send();
			xmlhttp.onreadystatechange=function()
			{
				if (xmlhttp.readyState==4 && xmlhttp.status==200)
				{
					var response = xmlhttp.responseText;
					//alert(response);
					if(response)
					 {
						if(response=="1_Image.txt")
						 {
							google.charts.load('current', {packages: ['corechart', 'bar']});
							google.charts.setOnLoadCallback(drawMultSeries);
							function drawMultSeries() {

							var data = google.visualization.arrayToDataTable(
[['Tax', 'SD1', 'SD2'],['Acidimicrobiia', 5, 215],['Alphaproteobacteria', 1603, 1654],['Anaerolineae', 15, 326],['Clostridia', 984, 2890],['Coriobacteriia', 13, 31],['Microgenomatia', 55, 21],['Others', 87, 320]]
							);
								var options = {
									title: 'Taxonamical classification',
									chartArea: {width: '60%'},
									hAxis: {
										title: 'Total count',
										minValue: 0
									       },
									vAxis: {
										title: 'Taxonamical level'
								      	 }
								};
								var chart = new google.visualization.BarChart(document.getElementById('result'));
								chart.draw(data, options);
						 	}
						 }
						if(response=="2_Image.txt")
						 {
							google.charts.load('current', {packages: ['corechart', 'bar']});
							google.charts.setOnLoadCallback(drawMultSeries);
							function drawMultSeries() {

							var data = google.visualization.arrayToDataTable(
[['Tax',        'SD1',  'SD2'],['Actinobacteriota',     47,     246],['Chloroflexi',    15,     488],['Firmicutes',     996,    2890],['Patescibacteria',       55,     107],['Proteobacteria', 1603,   1654],['Others',        48,     72]]
							);
								var options = {
									title: 'Taxonamical classification',
									chartArea: {width: '60%'},
									hAxis: {
										title: 'Total count',
										minValue: 0
									       },
									vAxis: {
										title: 'Taxonamical level'
								      	 }
								};
								var chart = new google.visualization.BarChart(document.getElementById('result'));
								chart.draw(data, options);
						 	}
						 }
						if(response=="3_Image.txt")
						 {
							google.charts.load('current', {packages: ['corechart', 'bar']});
							google.charts.setOnLoadCallback(drawMultSeries);
							function drawMultSeries() {

							var data = google.visualization.arrayToDataTable(
[['Tax',        'SD1',  'SD2'],['Acidimicrobiia',       5,      215],['Alphaproteobacteria',    1603,   1654],['Anaerolineae',  15,     326],['Clostridia',     984,    2890],['Coriobacteriia',        13,     31],['Microgenomatia',  55,     21],['Others',  87,     320]]
							);
								var options = {
									title: 'Taxonamical classification',
									chartArea: {width: '60%'},
									hAxis: {
										title: 'Total count',
										minValue: 0
									       },
									vAxis: {
										title: 'Taxonamical level'
								      	 }
								};
								var chart = new google.visualization.BarChart(document.getElementById('result'));
								chart.draw(data, options);
						 	}
						 }
						if(response=="4_Image.txt")
						 {
							google.charts.load('current', {packages: ['corechart', 'bar']});
							google.charts.setOnLoadCallback(drawMultSeries);
							function drawMultSeries() {

							var data = google.visualization.arrayToDataTable(
[['Tax',        'SD1',  'SD2'],['Actinomarinales',      5,      215],['Anaerolineales', 15,     326],['CG2-30-50-142',  13,     31],['Candidatus_Woesebacteria',        26,     14],['Clostridiales',   10,     159],['Lachnospirales', 50,     151],['Peptostreptococcales-Tissierellales',    922,    2570],['Rhizobiales',   136,    137],['Sphingomonadales',       1467,   1149],['Others',        118,    675]]
							);
								var options = {
									title: 'Taxonamical classification',
									chartArea: {width: '60%'},
									hAxis: {
										title: 'Total count',
										minValue: 0
									       },
									vAxis: {
										title: 'Taxonamical level'
								      	 }
								};
								var chart = new google.visualization.BarChart(document.getElementById('result'));
								chart.draw(data, options);
						 	}
						 }
						if(response=="5_Image.txt")
						 {
							google.charts.load('current', {packages: ['corechart', 'bar']});
							google.charts.setOnLoadCallback(drawMultSeries);
							function drawMultSeries() {

							var data = google.visualization.arrayToDataTable(
[['Tax',        'SD1',  'SD2'],['Anaerolineaceae',      15,     326],['Beijerinckiaceae',       10,     13],['CG2-30-50-142',   13,     31],['Caminicellaceae', 28,     65],['Candidatus_Woesebacteria',        26,     14],['Clostridiaceae',  10,     154],['Hyphomicrobiaceae',      57,     82],['Lachnospiraceae', 50,     151],['Methyloligellaceae',     24,     11],['Peptostreptococcaceae',   41,     164],['Peptostreptococcales-Tissierellales',    853,    2245],['Sphingomonadaceae',     1467,   1149],['uncultured',    5,      238],['Others', 163,    688]]
							);
								var options = {
									title: 'Taxonamical classification',
									chartArea: {width: '60%'},
									hAxis: {
										title: 'Total count',
										minValue: 0
									       },
									vAxis: {
										title: 'Taxonamical level'
								      	 }
								};
								var chart = new google.visualization.BarChart(document.getElementById('result'));
								chart.draw(data, options);
						 	}
						 }
						if(response=="6_Image.txt")
						 {
							google.charts.load('current', {packages: ['corechart', 'bar']});
							google.charts.setOnLoadCallback(drawMultSeries);
							function drawMultSeries() {

							var data = google.visualization.arrayToDataTable(
[['Tax',        'SD1',  'SD2'],['Anaeromicrobium',      160,    289],['CG2-30-50-142',  13,     31],['Candidatus_Woesebacteria',        26,     14],['Clostridiisalibacter',    693,    929],['Erythrobacter',  1467,   1149],['Methylobacterium-Methylorubrum',        10,     13],['Paramaledivibacter',      28,     65],['Tepidibacter',    41,     164],['uncultured',     72,     1321],['Others',        132,    1040]]
							);
								var options = {
									title: 'Taxonamical classification',
									chartArea: {width: '60%'},
									hAxis: {
										title: 'Total count',
										minValue: 0
									       },
									vAxis: {
										title: 'Taxonamical level'
								      	 }
								};
								var chart = new google.visualization.BarChart(document.getElementById('result'));
								chart.draw(data, options);
						 	}
						 }
						if(response=="7_Image.txt")
						 {
							google.charts.load('current', {packages: ['corechart', 'bar']});
							google.charts.setOnLoadCallback(drawMultSeries);
							function drawMultSeries() {

							var data = google.visualization.arrayToDataTable(
[['Tax',        'SD1',  'SD2'],['Tepidibacter_mesophilus',      41,     164],['bacterium_YC-ZSS-LKJ129',        693,    929],['marine_sediment',        48,     127],['uncultured_Eubacterium', 10,     154],['uncultured_Hyphomicrobiaceae',   81,     82],['uncultured_bacterium',    39,     78],['Others',  66,     1270]]
							);
								var options = {
									title: 'Taxonamical classification',
									chartArea: {width: '60%'},
									hAxis: {
										title: 'Total count',
										minValue: 0
									       },
									vAxis: {
										title: 'Taxonamical level'
								      	 }
								};
								var chart = new google.visualization.BarChart(document.getElementById('result'));
								chart.draw(data, options);
						 	}
						 }
						
					 }
				}
			}
		}

	</script>
</head>
<header>
	<div class="top-band">
		<img src="./images/logo.png" alt="">
	</div>
</header>
<body onload=buttonpress(1,7)>

	<div align='center' id='maindiv'>
		<button class="button button1" id='b1' onclick="buttonpress(1,7)">Kingdom</button>
		<button class="button button2" id='b2' onclick="buttonpress(2,7)">Phylum</button>
		<button class="button button3" id='b3' onclick="buttonpress(3,7)">Class</button>
		<button class="button button4" id='b4' onclick="buttonpress(4,7)">Order</button>
		<button class="button button5" id='b5' onclick="buttonpress(5,7)">Family</button>
		<button class="button button6" id='b6' onclick="buttonpress(6,7)">Genus </button>
		<button class="button button7" id='b7' onclick="buttonpress(7,7)">Species</button>
	</div>

	<br><br><br>

	<div id='result' align='center'>
	</div>
</body>
</html>
