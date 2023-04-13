<?php
$sql="DELETE FROM contact WHERE serialno='".$_GET["id"]."'";
include_once("../db/db.php");

if($con->query($sql) === TRUE){
    echo '<script language="javascript">';
    echo 'alert("Contact Removed Successfully");
    location.href="contactlist.php"';
    echo '</script>';
}
else{
    echo $con->Error;
}

?>