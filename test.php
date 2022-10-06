<?php
  echo $file = $_REQUEST['INP'];exit;
  $line = '';
  $info = fopen($file, "r") or die("Couldn't open $file <br>");
  while(!feof($info))
  {
    $line = fgets($info);
  }
  fclose($info);
   $line."<br>";//exit;
?>
<html>
 <head>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript">
google.charts.load('current', {packages: ['corechart', 'bar']});
google.charts.setOnLoadCallback(drawMultSeries);
function drawMultSeries() {
      var data = google.visualization.arrayToDataTable(
        <?php
          echo $line;
        ?>
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
    var chart = new google.visualization.BarChart(document.getElementById('chart_div'));
      chart.draw(data, options);
    }
	</script>
  </head>
  <body>
    <div id="chart_div">
      hello
    </div>
  </body>
</html>
