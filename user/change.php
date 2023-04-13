<?php
if(isset($_GET['avid'])){
    $sql = "UPDATE users SET Availability = 'Available' WHERE SerialNo = '".$_GET['avid']."'";
    
}
elseif(isset($_GET['unavid'])){
     $sql = "UPDATE users SET Availability = 'Unvailable' WHERE SerialNo = '".$_GET['unavid']."'";
}
//echo $sql;
include_once('../db/db.php');
if($con->query($sql) ===  TRUE){
    echo '<script language="javascript">';
  echo 'alert("Info updated Successfully"); location.href="udashboard.php"';
  echo '</script>';
      }
      
      else{
          echo $con->Error;
      }
?>