<?php
$servername="localhost";
$user="root";
$password="";
$database="project";


$con=mysqli_connect($servername,$user,$password,$database);
 

if($con->connect_error){ 
     die('connection failed:'.$con->connect_error);
}
?>