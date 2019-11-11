<!DOCTYPE html>
<html>
<head>
<title>Registreret</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="stylecss.css">
</head>
<body>
    <div id="container"><!--Container-->
        <div id="header-container"><!--Header-Container-->
            <div id="header"><!--header-->
                <center><font size="5"><h1>Registreret Skostørrelse</h1></font></center>  
            </div><!--header-->
            <div id="nav-bar"><!--navbar-->
                <ul>
                    <li><a href="index.php">Registrer</a></li>
                    <li><a href="Hyppighed.php">Hyppighed</a></li>
                    <li class="selected"><a href="Hyppighed.php">Registreret</a></li>
                </ul> 
            </div><!--navbar-->
        </div><!--Header-Container-->
        <div id="main-container"><!--main-container-->
            <div id="main-container-reg-center">
                 <div class="ex1">
                           <?php
                           include 'databaseconn.php';
                           
                     $sql_tabel = "SELECT * FROM skounder order by id desc limit 400"; 
                     $data = mysqli_query($connect,$sql_tabel);
                     $datacheck = mysqli_num_rows($data); 
                     
                     if($data){
                         while ($row = mysqli_fetch_assoc($data)){
                            echo '<div id="user-data-container">';
                            echo '<table style="width:100%">';
                            echo '<tr>';
                            echo '<th>Navn</th>';
                            echo '<th>Alder</th>';
                            echo '<th>Mail</th>';
                            echo '<th>Skostørrelse</th>';
                            echo '<th>Vægt</th>';
                            echo '<th>Dato</th>';
                            echo '</tr>';
                            echo '<tr>';
                            echo '<th>'.$row['Navn']."&nbsp;".$row['Efternavn'].'</th>';
                            echo '<th>'.$row['Alder'].'</th>';
                            echo '<th>'.$row['mail'].'</th>';
                            echo '<th>'.$row['skostoerrelse'].'</th>';
                            echo '<th>'.$row['vagt'].'</th>';
                            echo '<th>'.$row['dato'].'</th>';
                            echo '</tr>';
                            echo '</table>'; 
                            echo '</div>';
                         }  
                     }  
                     
                     ?>
                   </div>
            </div>
      </div><!--main-container-->
    </div><!--Container-->
</body>
</html>







