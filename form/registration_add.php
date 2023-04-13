<?php
require "../db/db.php";
$Firstname = $_POST["Firstname"];
$Lastname = $_POST["Lastname"];
$PhoneNumber = $_POST["PhoneNumber"];
$Email = $_POST["Email"];
$Dateofbirth = $_POST["Dateofbirth"];
$Address = $_POST["Address"];
$Password = $_POST["Password"];


$query = "INSERT INTO `user`(`Serial_no`, `Firstname`, `Lastname`, `PhoneNumber`, `Email`, `Dateofbirth`, `Address`, `Password`) VALUES ('NULL','$Firstname','$Lastname','$PhoneNumber','$Email','$Dateofbirth','$Address','$Password')";

if($con->query($query) ===  TRUE){
    echo "Success";
      }
      
      else{
          echo $con->Error;
      }
      ?>