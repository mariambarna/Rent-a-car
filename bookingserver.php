<?php 
session_start();
require('db/db.php');
$sql = "INSERT INTO `rentinfo`( `FName`, `LName`, `PhoneNo`, `Email`, `NID`, `DOB`, `Address`, `VehicleID`, `PickUp`, `PickUpDate`, `PickUpTime`, `DropOff`, `DropOffDate`, `DropOffTime`, `TourTime`, `TourFare`) VALUES ('".$_POST['Firstname']."','".$_POST['Lastname']."','".$_POST['PhoneNumber']."','".$_POST['Email']."','".$_POST['NIDNO']."','".$_POST['Dateofbirth']."','".$_POST['Address']."',
'".$_POST['vid']."','".$_SESSION['PickUp']."','".$_SESSION['PickUpDate']."','".$_SESSION['PickUpTime']."','".$_SESSION['DropOff']."','".$_SESSION['DropOffDate']."','".$_SESSION['PickUpTime']."','".$_SESSION['Hour']."','".$_SESSION['Fare']."')";
if($con->query($sql) ===  TRUE){
    session_abort();
    echo '<script language="javascript">';
  echo 'alert("Info Added Successfully"); location.href="pra.php"';
  echo '</script>';
      }
      
      else{
          echo $con->Error;
      }
?>