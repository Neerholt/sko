<!DOCTYPE html>
<html>
<head>
<title>Hyppighed</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="stylecsss.css">
</head>
<body>
    <div id="container"><!--Container-->
        <div id="header-container"><!--Header-Container-->
            <div id="header"><!--header-->
                <center><font size="5"><h1>Hyppighed Skostørrelse</h1></font></center>  
            </div><!--header-->
            <div id="nav-bar"><!--navbar-->
                <ul>
                    <li><a href="index.php">Registrer</a></li>
                    <li class="selected"><a href="Hyppighed.php">Hyppighed</a></li>
                    <li><a href="Registreret.php">Registreret</a></li>
                </ul> 
            </div><!--navbar-->
        </div><!--Header-Container-->
        <div id="main-container"><!--main-container-->
                 <div id="registrer-form"><!--registrer-form-->
                <div id="registrer-form-center"><!--registrer-form-center-->
                  <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
  <script type="text/javascript">
    google.charts.load("current", {packages:['corechart']});
    google.charts.setOnLoadCallback(drawChart);
    function drawChart() {
      var data = google.visualization.arrayToDataTable([
    ['Element', 'Density', { role: 'style' }],
         ['Copper', 8.94, '#b87333'],            // RGB value
         ['Silver', 10.49, 'silver'],            // English color name
         ['Gold', 19.30, 'gold'],
      ]);

      var view = new google.visualization.DataView(data);
      view.setColumns([0, 1,
                       { calc: "stringify",
                         sourceColumn: 1,
                         type: "string",
                         role: "annotation" },
                       2]);

      var options = {
        title: "Skostorrelse",
        width: 900,
        height: 550,
        bar: {groupWidth: "50%"},
        legend: { position: "none" },
      };
      var chart = new google.visualization.ColumnChart(document.getElementById("columnchart_values"));
      chart.draw(view, options);
  }
  </script>
<div id="columnchart_values" style="width: 900px; height: 300px;"></div>
                </div><!--registrer-form-center-->
            </div><!--registrer-form-->
      </div><!--main-container-->
    </div><!--Container-->
</body>
</html>
