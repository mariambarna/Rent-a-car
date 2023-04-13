<?php
session_start();
if ($_SESSION["userrole"] == "owner" AND $_SESSION["Flag"] =='Running'){

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <script src="../jquery.js"></script>
    <script src="https://cdn.jsdeliver.net/npm/popper.js@1.16.1/dist/umb/popper.min.js"></script>
    <script src="../bootstrap/js/bootstrap.bundle.js"></script>
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.css">
<link rel="stylesheet" href="../css/usercss.css">
<script src="https://kit.fontawesome.com/1e2c5a8858.js" crossorigin="anonymous"></script>

</head>
<body>
    <!-- <div class="row">
        <div class="sidebar col-2 bg-light"> -->
            <!-- <div class="row">
            <div class="sidebar col-10 bg-info">
             
            <ul class="nav flex-column">
    <li class="nav-item">
      <a class="nav-link" href="#"><i class="fa-solid fa-house-chimney"></i> Home</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#"><i class="fa-solid fa-car-side"></i> Vehicles</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#"><i class="fa-solid fa-couch"></i> Seat</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#"><i class="fa-solid fa-feather"></i> Brand</a>
    </li>
    
    <li class="nav-item">
      <a class="nav-link" href="#"><i class="fa-solid fa-people-line"></i> Manage Users</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#"><i class="fa-solid fa-cash-register"></i> Payments</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#"><i class="fa-solid fa-list"></i> Report</a>
    </li>
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#"><i class="fa-solid fa-gears"></i> Manage Section</a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="#">Link 1</a>
        <a class="dropdown-item" href="#">Link 2</a>
        <a class="dropdown-item" href="#">Link 3</a></div>
    </li>
     -->
    <!-- <li class="nav-item">
      <a class="nav-link disabled" href="#">Disabled</a>
    </li> -->
  <!-- </ul>
            </div>
<div class="topbar col-2 "></div>
</div>
        </div> -->
        <div class="mainbar mb-5 col-12 bg-light">
            <div class="row">
                <div class="topbar bg-dark  text-light">
                    <div class="row">
                        <div class="col-7  pt-1" >
                            <div class="row pl-1">
                               
                        <div class="col-4 pt-2 ml-5 mr-5 pl-5">
                        <a href="rideinfo.php" class="mw  text-light"> <i class="fa-solid fa-user"></i>Ride Info  </a> 
                        
                        </div>
                        <div class="col-4 pt-2 ml-5 mr-5 pl-5">
                        <a href="upcomingrideinfo.php" class="mw  text-light"> <i class="fa-solid fa-user"></i> Upcoming ride Info  </a> 
                        
                        </div>
                        </div>

                        </div>
                        <div class="col-1 pt-3 " >
                         <a title="Home " class="mw  text-light" href="udashboard.php"><i class="fa-solid fa-house-chimney"></i>Home </a>
                   
                      

</div>

                        
                        <div class="col-2 pt-3 ml-2 mr-2 pl-1">
                        <a href="profile.php" class="mw  text-light"> <i class="fa-solid fa-user"></i> <?php echo $_SESSION['Email']?>  </a> 
                        
                        </div>
                        <div class="col-1 pt-3 pl-5" >
                       
                        <a title="Logout"  class="mw  text-light" href="../logout.php">  <i class="fa-solid fa-right-from-bracket"></i>Logout</a>
                        </div>
                  
                 
                    </div>
                    </div>
</div>
<?php
include 'userlist.php';
   ?>

    

    </div>
  </div>
  
  </div> 
  </div>
  
  
  
  
  
  
  
  
  
  
  
  
  
  </body>
  </html>
  
  
  
<?php
}
else{
  header("Location: ../signin.php");
}
 ?>
