<?php
// echo $_SESSION['Id'];
session_start();
$sql = "SELECT * FROM users WHERE Email = '".$_SESSION['Email']."'";
include_once('../db/dbconnect.php');
$result = getDataFromDB($sql);

foreach($result as $row){
    $dbpass = $row["Password"];
}

$oldpass = $_POST["oldpassword"];

if($oldpass != $dbpass){
    echo "Invalid Password";
}
elseif($_POST["newpassword"] != $_POST["confirmpassword"]){
    echo "Passwords are not matched";
}
else{
    include_once('../db/db.php');
    $updatesql = "UPDATE users SET Password = '".$_POST["newpassword"]."' WHERE Email = '".$_SESSION['Email']."'";
    if($con->query($updatesql) === TRUE){
        echo '<script language="javascript">';
        echo 'alert("Password Changed Successfully"); location.href="adminprofile.php"';
        echo '</script>';
    }
}
?>
