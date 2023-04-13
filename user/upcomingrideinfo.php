<?php 

           session_start();
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
<div class="p-5">
    <table class="table table-sm table-striped">
        <tr>
            <th>Serial No</th>
            <th>Route</th>
            <th>Hours</th>
            <th>Name</th>
            <th>Contact</th>
            <th>Email</th>
            <th>NID</th>
            <th>Address</th>
            <th>Vehicle ID</th>
            <th>Pick Up</th>
            <th>Drop Off</th>
            <th>Fare</th>
            <th>Action</th>
        </tr>
        <?php
        $sql = "SELECT * FROM rentinfo WHERE VehicleID = '".$_SESSION['VehicleID']."' AND Status = 'Pending' OR Status = 'Started' ORDER BY SerialNo DESC";
      //  echo $sql; 
        include_once('../db/dbconnect.php');
        $res = getDataFromDB($sql);
        foreach($res as $row){
            ?>
            <tr>
                <td><?php echo $row['SerialNo'] ?></td>
                <td><?php echo $row['PickUp'].' - '.$row['DropOff'] ?></td>
                <td><?php echo $row['TourTime'] ?></td>
                <td><?php echo $row['FName'].' '.$row['LName'] ?></td>
                <td><?php echo $row['PhoneNo'] ?></td>
                <td><?php echo $row['Email'] ?></td>
                <td><?php echo $row['NID'] ?></td>
                <td><?php echo $row['Address'] ?></td>
                <td><?php echo $row['VehicleID'] ?></td>
                <td><?php echo $row['PickUpDate'].' '.$row['PickUpTime'] ?></td>
                <td><?php echo $row['DropOffDate'].' '.$row['DropOffTime'] ?></td>
                <td><?php echo $row['TourFare'] ?></td>
                <td><?php if($row['Status'] == 'Pending'){
                ?>
                <a href="updateride.php?startid=<?php echo $row['SerialNo'] ?>" class="btn btn-sm btn-success">Start</a> <a href="updateride.php?cancelid=<?php echo $row['SerialNo'] ?>" class="btn btn-sm btn-danger">Cancel</a>
                <?php
                
            }
                    elseif($row['Status'] == 'Started'){
                         ?>
                <a href="updateride.php?compid=<?php echo $row['SerialNo'] ?>" class="btn btn-sm btn-primary">Completed</a> <a href="updateride.php?cancelid=<?php echo $row['SerialNo'] ?>" class="btn btn-sm btn-danger">Cancel</a>
                <?php
                    }
                    else{
                        echo $row['Status'];
                    }?></td>
            </tr>
            <?php
        }
        ?>
    </table>
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

