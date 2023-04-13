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
       <div class="container p-4 ">
         
    <h5>Earning</h5>
    <div class="row">
    <?php

        $sql = "SELECT SUM(TourFare) AS Fare FROM rentinfo WHERE Status = 'Completed' AND VehicleID = '".$_SESSION["VehicleID"]."'";
        include_once('../db/dbconnect.php');
        $res = getDataFromDB($sql);
//        var_dump($res);
        foreach($res as $row){
            $fare = $row['Fare'];
        ?>
        <h1 class="text-right"><?php 
        $commission = $fare * 85 / 100;
        echo number_format((float)$commission, 2, '.', ''); ?> Tk</h1>
        <?php 
        }
        ?>
   
    </div>
       
       <div class="availability mt-5 pt-5">
          <h3>Availibility Status: </h3>
           <?php 
           $sql = "SELECT * FROM users WHERE  SerialNo = '".$_SESSION["VehicleID"]."'";
        include_once('../db/dbconnect.php');
           $res = getDataFromDB($sql);
//           var_dump($res);
           foreach($res as $row){
               $stat = $row['Availability'];

           }
           if($stat == "Available"){
               ?>
               <a href="change.php?unavid=<?php echo $_SESSION["VehicleID"] ?>" class="btn btn-danger btn-sm">Unavailable</a>
               <?php 
           }
           else{
               ?>
               <a href="change.php?avid=<?php echo $_SESSION["VehicleID"] ?>" class="btn btn-success btn-sm">Available</a>
               <?php 
           }
           ?>
       </div>
        
           
       </div>

<!-- <div class="row">
  <div class="card-deck pt-5 ">
   
    
    <div class="card menucard "> 
      <h5>Total users
</h5>
<div class="row">
      <button class="mm"> <a title="ADD" href="#"> <i class="fa-solid fa-square-plus"></i></a></button>
      <button class="mm"><a title="DELETE" href="#"><i class="fa-solid fa-trash"></i></a></button>
      <button class="mm"><a title="EDIT" href="#"><i class="fa-solid fa-file-pen"></i></a></button>
    </div>
    </div>
    <div class="card menucard">  
      <h5>Total Vehicles</h5>
      <div class="row">
      <button class="mm"><a title="ADD"  href="#"><i class="fa-solid fa-square-plus "></i></a></button>
      <button class="mm"><a title="DELETE" href="#"><i class="fa-solid fa-trash"></i></a></button>
      <button class="mm"><a title="EDIT" href="#"><i class="fa-solid fa-file-pen"></i></a></button>
    </div>
    </div>
    <div class="card menucard"> 
    <h5>Brand </h5>
    <div class="row">
      <button class="mm"><a title="ADD"  href="#"><i class="fa-solid fa-square-plus"></i></a></button>
       
      <button class="mm"><a title="DELETE"  href="#"><i class="fa-solid fa-trash"></i></a></button>
     
      <button class="mm"><a title="EDIT" href="#"><i class="fa-solid fa-file-pen"></i></a></button>
    </div>
    </div> </div> -->
    <!-- <div class="card menucard ">  
    <h5>complete Vehicles booking</h5>
    </div> -->
    </div>
    
    

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
