<?php
require "../db/db.php";
$FirstName = $_POST["FirstName"];
$LastName = $_POST["LastName"];
$Email = $_POST["Email"];
$DateofBirth = $_POST["DateofBirth"];
$PhoneNumber = $_POST["PhoneNumber"];
$NIDNO = $_POST["NIDNO"];
$Address = $_POST["Address"];
$Gender = $_POST["Gender"];
$Password = $_POST["Password"];

$Vehiclesbrand = $_POST["Vehiclesbrand"];

$Model = $_POST["Model"];

$RegistrationNo = $_POST["RegistrationNo"];

$RegistrationDate = $_POST["RegistrationDate"];

$Color = $_POST["Color"];

$NumberofSeat = $_POST["NumberofSeat"];

$Firstname = $_POST["fname"];

$LastName = $_POST["lname"];

$Email = $_POST["emal"];

$PhoneNumber = $_POST["PNumber"];

$NIDcard = $_POST["Ncard"];

$Dateofbirth = $_POST["Datebirth"];

$Address = $_POST["Addres"];

$Gender = $_POST["Gen"];

$filename = $_FILES["Image"]["name"];
$tmpname = $_FILES["Image"]["tmp_name"];


$filetype= strtolower(pathinfo($filename,PATHINFO_EXTENSION));
$movefile = '../image/' .$Email.'.' .$filetype;
$dbfile = 'image/' .$Email.'.' .$filetype;
  move_uploaded_file($tmpname, $movefile);













$query = "INSERT INTO `users` (`serialno`, `FirstName`, `LastName`, `Email`, `DateofBirth`, `PhoneNumber`, `NIDNO`, `Address`, `Gender`, `Password`, `Vehiclesbrand`, `Model`, `RegistrationNo`, `RegistrationDate`, `Color`, `NumberofSeat`, `fname`, `lname`, `emal`, `PNumber`, `Ncard`, `Datebirth`, `Addres`, `Gen`, `Image`, `userrole`) VALUES ('Null', '$FirstName', '$LastName', '$Email', '$DateofBirth', '$PhoneNumber', '$NIDNO', '$Address', '$Gender', '$Password', '$Vehiclesbrand', '$Model', '$RegistrationNo', '$RegistrationDate', '$Color', '$NumberofSeat', '$Firstname', '$LastName', '$Email', '$PhoneNumber', '$NIDcard', '$Dateofbirth', '$Address', '$Gender', '$dbfile', 'Owner')";


if($con->query($query) ===  TRUE){
    echo '<script language="javascript">';
  echo 'alert("Info Added Successfully"); location.href="../pra.php"';
  echo '</script>';
      }
      
      else{
          echo $con->Error;
      }
      ?>