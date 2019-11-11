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
              <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script><!--Google charts start-->
    <script type="text/javascript">
      google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = new google.visualization.DataTable();
    data.addColumn('string', 'Skostørrelser');
    data.addColumn('number', 'Antal');
    data.addRows([
         <?php 
                     include 'databaseconn.php';
                     $sql_tabel = "SELECT skostoerrelse, COUNT(*) AS Antal FROM skounder GROUP BY skostoerrelse"; 
                     $data = mysqli_query($connect,$sql_tabel);                    
                     while ($row = mysqli_fetch_array($data)){
                     echo "['".$row[0]."',".$row[1]."],";
                     }                                         
	?>                        
        ]);
         var options = {
        title: "Skostørrelser",
        bar: {groupWidth: "20%"},
        legend: { position: "10%" }
      };
        var chart = new google.charts.Bar(document.getElementById('columnchart_material'));
        chart.draw(data, google.charts.Bar.convertOptions(options));
      }
    </script>
    <div id="columnchart_material" style="width: 900px; height: 500px;"></div><!--Google charts start-->
                </div><!--registrer-form-center-->
            </div><!--registrer-form-->
      </div><!--main-container-->
    </div><!--Container-->
</body>
</html>
