<?php
require "../db/db.php";
$Firstname = $_POST["Firstname"];
$Lastname = $_POST["Lastname"];
$PhoneNumber = $_POST["PhoneNumber"];
$Email = $_POST["Email"];
$NIDNO = $_POST["NIDNO"];
$Dateofbirth = $_POST["Dateofbirth"];
$Address = $_POST["Address"];
$Password = $_POST["Password"];


$query = "INSERT INTO `user`(`Firstname`, `Lastname`, `PhoneNumber`, `Email`, `NIDNO`, `Dateofbirth`, `Address`, `Password`, `userrole`) VALUES ('$Firstname','$Lastname','$PhoneNumber','$Email','$NIDNO','$Dateofbirth','$Address','$Password','owner')";
if($con->query($query) ===  TRUE){
    echo "Success";
      }
      
      else{
          echo $con->Error;
      }
      ?>