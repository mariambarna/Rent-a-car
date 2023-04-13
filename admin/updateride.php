<?php 
if(isset($_GET['startid'])){
    $sql = "UPDATE rentinfo SET Status = 'Started' WHERE SerialNo = '".$_GET['startid']."'";
}

elseif(isset($_GET['cancelid'])){
    $sql = "UPDATE rentinfo SET Status = 'Cancelled' WHERE SerialNo = '".$_GET['cancelid']."'";
}
elseif(isset($_GET['compid'])){
    $sql = "UPDATE rentinfo SET Status = 'Completed' WHERE SerialNo = '".$_GET['compid']."'";
}

include_once('../db/db.php');
if($con->query($sql) ===  TRUE){
    echo '<script language="javascript">';
  echo 'alert("Info updated Successfully"); location.href="upcomingrideinfo.php"';
  echo '</script>';
      }
      
      else{
          echo $con->Error;
      }
?>