<?php 
include 'databaseconn.php';

if(isset($_POST['submit'])){
    
$navn = $_POST['navn'];
$efternavn = $_POST['efternavn'];
$alder = $_POST['alder'];
$email = $_POST['email'];
$sko = $_POST['sko'];
$vagt = $_POST['vagt'];
    
    
      
$sql_tabelOne = "INSERT INTO `skounder`(`ID`, `Navn`, `Efternavn`, `Alder`, `mail`, `sko`, `vagt`, `dato`) VALUES (NULL,'$navn','$efternavn','$alder','$email','$sko','$vagt',NULL)";

mysqli_query($connect,$sql_tabelOne);

header("location:hyppighed.php");
mysqli_close($connect);
}
?>    



<!DOCTYPE html>
<html>
<head>
<title>Registrer</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div id="container"><!--Container-->
        <div id="header-container"><!--Header-Container-->
            <div id="header"><!--header-->
                <center><font size="5"><h1>Registrer Skostørrelse</h1></font></center>  
            </div><!--header-->
            <div id="nav-bar"><!--navbar-->
                <ul>
                    <li  class="selected"><a href="Registrer.php">Registrer</a></li>
                    <li><a href="Hyppighed.php">Hyppighed</a></li>
                    <li><a href="Registreret.php">Registreret</a></li>
                </ul> 
            </div><!--navbar-->
        </div><!--Header-Container-->
        <div id="main-container"><!--main-container-->
            <div id="registrer-form"><!--registrer-form-->
                <div id="registrer-form-center"><!--registrer-form-center-->
                <center><h1>Registrer dig</h1></center>
                 <center><hr align="center" width="90%"></center>
                 <form action="" method="POST">
                     <br/>
                    <table>
                         <tr>
                             <td><font size="5"><label>Navn</label></font></td>
                             <td><font size="5"><label>Efternavn</label></font></td>
                              <td><font size="5"><label>Alder</label></font></td>
                         </tr>
                         <tr>
                             <td><input type="text" name="navn" placeholder="Navn" class="textboxs"></td>
                             <td><input type="text" name="efternavn" placeholder="Efternavn" class="textboxs"></td>
                             <td><input type="text" name="alder" placeholder="alder" class="textboxs"></td>
                         </tr>
                         </table><br/><br/>
                     <table>
                         <tr>
                             <td><font size="5"><label>E-mail</label></font></td>
                             <td><font size="5"><label>Skostørrelse</label></font></td>
                              <td><font size="5"><label>Vægt</label></font></td>
                         </tr>
                         <tr>
                             <td><input type="text" name="email" placeholder="Email" class="textboxs"></td>
                             <td><input type="number" name="sko" placeholder="Skostørrelse" class="textboxs"></td>
                             <td><input type="number" name="vagt" placeholder="Vægt" class="textboxs"></td>
                         </tr>
                         </table>
                         
                         <input class="knap" type="submit" name="submit" value="Submit">
                     </form><br/><br/><br/>
                  <center><hr align="center" width="90%"></center>
                </div><!--registrer-form-center-->
            </div><!--registrer-form-->
      </div><!--main-container-->
    </div><!--Container-->
</body>
</html>
