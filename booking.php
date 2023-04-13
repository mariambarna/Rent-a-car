<!DOCTYPE html>
<html>
<head>
    <title>Registration Form</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="css/regis.css">
</head>

    <body>
       <?php session_start(); ?>
       <div class="row">
           <div class="col-6 text-light text-center pt-5" style="background: #ebd0ce;">
               <h3>Your Choosen Option</h3>
               <h5>Pick Up: <big class="text-danger"><?php echo $_SESSION['PickUp'] ?></big></h5>
               <h5>Pick Up Date: <big class="text-danger"><?php echo $_SESSION['PickUpDate'] ?></big></h5>
               <h5>Pick Up Time: <big class="text-danger"><?php echo $_SESSION['PickUpTime'] ?></big></h5>
               <h5> Drop Off: <big class="text-info"><?php echo $_SESSION['DropOff'] ?></big></h5>
               <h5> Drop Off Date: <big class="text-info"><?php echo $_SESSION['DropOffDate'] ?></big></h5>
               <h5> Drop Off Time: <big class="text-info"><?php echo $_SESSION['DropOffTime'] ?></big></h5>
               <h5>Estimated Tour Time: <big class="text-success">
                <?php 
            
$datetime1 = new DateTime($_SESSION['PickUpDate']." ".$_SESSION['PickUpTime']);
$datetime2 = new DateTime($_SESSION['DropOffDate']." ".$_SESSION['DropOffTime']);
$interval = $datetime1->diff($datetime2);
$day = $interval->format('%a');
$hour = $interval->format('%h');
                   $totalhours = $day * 24 + $hour;
echo $totalhours.' hours';
  
//echo "Diff: ".$day." Seconds";
               ?>
                   </big>
               </h5>
               <h5>Estimated Fare: <big class="text-success">
                   <?php
                        $sql = "SELECT Fare FROM users WHERE serialno = '".$_GET['id']."'";
                   include_once('db/dbconnect.php');
                   $res = getDataFromDB($sql);
                   foreach($res as $row){
                       echo $row['Fare']*$totalhours/24;;
                       $_SESSION["Fare"] = $row['Fare']*$totalhours/24;
                   }
                   
                   ?>
                Taka</big></h5>
             
           </div>
           <div class="col-6">  
           <div class="right">
      
            <form action="bookingserver.php" method="post">
          <h1>Fill up the Form</h1>
          
          <div class="timee">
            <div class="linee">First Name </div>
            <div class="somee"><input type="text" name="Firstname" placeholder="Enter your First Name..." ></div> 
         </div> 
        <div class="timee">
             <div class="linee">Last Name </div>
             <div class="somee"><input type="text" name="Lastname" placeholder="Enter your Last Name..." ></div> 
          </div>
 
        
            
     
        
         <div class="timee">
             <div class="linee">Phone Number </div>
             <div class="somee"><input type="text" name="PhoneNumber" placeholder="Enter your Number..." ></div> 
          </div>
         
          <div class="timee">
             <div class="linee">Email </div>
             <div class="somee"><input type="email" name="Email" id="email" placeholder="Enter your Email... " ></div> 
          </div>
          <div class="timee">
             <div class="linee">NIDNO </div>
             <div class="somee"><input type="NIDNO" name="NIDNO" id="NIDNO" placeholder="Enter your nid... " ></div> 
          </div>
          <div class="timee">
             <div class="linee">Date of Birth </div>
             <div class="somee"><input type="date" name="Dateofbirth"></div> 
          </div>
          
            
          <div class="timee">
             <div class="linee">Address</div>
             <div class="somee"><textarea name="Address"  cols="53" rows="3"></textarea></div> 
          </div>
          <div class="timee">
             <div class="linee">Vehicle ID</div>
             <div class="somee"><input type="text" name="vid" value="<?php echo $_GET['id']?>" placeholder="Enter your Password..."></div> 
          </div>
           
           <div class="buut">
           <button type="submit" value="submit">Submit</button>
           <!-- <button type="reset">Reset</button> -->
        </div>
        
          </form>
          
        

     </div>
  </div>
       </div>
        </body>

</html>
