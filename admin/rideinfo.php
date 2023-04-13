<?php
session_start();
if ($_SESSION["userrole"] == "admin" AND $_SESSION["Flag"] =='Running'){

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
    <div class="row">
        <div class="sidebar col-2 bg-light">
            <div class="row">
            <div class="sidebar col-10 bg-dark">
             
            <ul class="nav flex-column">
            <li class="nav-item">
    <a class="nav-link" href="dashboard.php"><i class="fa-solid fa-house-chimney"></i> Home</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="vecilelist.php"><i class="fa-solid fa-car-side"></i> Vehicles</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="reglist.php"><i class="fa-solid fa-people-line"></i> owner info</a>
    </li>
    
    <li class="nav-item">
      <a class="nav-link" href="payment.php"><i class="fa-solid fa-cash-register"></i> Payment</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="rentinfolist.php"><i class="fas fa-user-nurse"></i> Rent info</a>
    </li>
    
    <li class="nav-item">
      <a class="nav-link" href="driverinfolist.php"><i class="fas fa-user-nurse"></i> Driver</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="contactlist.php"><i class="fas fa-envelope-open-text"></i> Massage</a>
    </li>
    
    <li class="nav-item">
      <a class="nav-link" href="rideinfo.php"><i class="fas fa-user-nurse"></i> Ride info</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="upcomingrideinfo.php"><i class="fas fa-envelope-open-text"></i> Upcoming RideInfo</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="approval.php"><i class="fa-solid fa-list"></i> Approval</a>
    </li>
    
    <!-- <li class="nav-item">
      <a class="nav-link disabled" href="#">Disabled</a>
    </li> -->
  </ul>
            </div>
<div class="topbar col-2 "></div>
</div>
        </div>
        <div class="mainbar col-10 bg-light">
            <div class="row">
                <div class="topbar">
                    <div class="row">
                        <div class="col-4  pt-2" >
                            <div class="row">
                                <div class="col-8">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                        <input type="text" class="form-control" placeholder="Search"> 
                                            <span class="input-group-text">
                                                
                                            <a title="Search" href="#"> <i class="fa-solid fa-magnifying-glass" ></i></a>
                                           
                                            </span>
                                            
                                        </div>
                                    </div>
                              
                                </div>
                           <!-- <div class="col-2">
                            <button class="btn btn-success btn-block">Search</button>
                           </div> -->
                        </div>

                        </div>
                        <div class="col-4"></div>
                        <!-- <div class="col-1 pt-3" >
                         <a title="Notification" href="#"><i class="fa-solid fa-bell"></i> </a>
                   
                      

</div> -->

                        
                        <div class="col-2 pt-3  pl-2">
                        <a href="#" class="mw"> <i class="fa-solid fa-user"></i> Admin Profile   </a> 
                        
                        </div>
                        <div class="col-1 pt-2 pl-1" >
                       
                        <a title="Logout" class="nav-link" href="../logout.php">  <i class="fa-solid fa-right-from-bracket"></i></a>
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
            <th>Status</th>
        </tr>
        <?php
        $sql = "SELECT * FROM rentinfo WHERE Status = 'Cancelled' OR Status = 'Completed' ORDER BY SerialNo DESC";
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
                <td><?php echo $row['Status'] ?></td>
            </tr>
            <?php
        }
        ?>
    </table>
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
