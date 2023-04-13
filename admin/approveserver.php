<?php 
include('../db/db.php');

$sql = "UPDATE users SET Fare = '".$_POST['fare']."',Status = 'Approved' WHERE serialno = '".$_POST['id']."'";
if($con->query($sql) ===  TRUE){
    echo '<script language="javascript">';
  echo 'alert("Info updated Successfully"); location.href="approval.php"';
  echo '</script>';
      }
      
      else{
          echo $con->Error;
      }
?>