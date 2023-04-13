<?php
$Email = $_POST['Email'];
$Password = $_POST['Password'];

$usersql = "SELECT * FROM users Where Email= '".$Email."' AND Status != 'Pending'";
include_once 'db/dbconnect.php';
$res = getDataFromDB($usersql);
$count = count($res);

if ($count != 0){ 
    session_start();
    foreach ($res as $row) {
        if($row['Email']== $Email and $row["Password"] == $Password){
if ($row["userrole"]=="admin")
         {
         $_SESSION["userrole"] = 'admin';
            $_SESSION["Email"] = $row["Email"];
            $_SESSION["Flag"] = 'Running';
             header("Location: admin/dashboard.php");
         }
        else {
            $_SESSION["userrole"] = 'owner';
            $_SESSION["Email"] = $row["Email"];
            $_SESSION["VehicleID"] = $row["serialno"];
            $_SESSION["Flag"] = 'Running';
            header ("Location: user/udashboard.php") ;
          }
       }
   else{
 echo '<script language="javascript">';
  echo 'alert("Invalied Usermail OR PASSWORD"); location.href="signin.php"';
  echo '</script>';
        }
 }
}
else{
    echo '<script language="javascript">';
    echo 'alert("NO USER FOUND"); location.href="signin.php"';
    echo '</script>';
  }
?>