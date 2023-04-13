<?php
$sql="DELETE FROM users WHERE serialno='".$_GET["id"]."'";
include_once("../db/db.php");

if($con->query($sql) === TRUE){
    echo '<script language="javascript">';
    echo 'alert("Canceled Registration Successfully");
    location.href="approval.php"';
    echo '</script>';
}
else{
    echo $con->Error;
}

?>