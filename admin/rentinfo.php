<style>
    
    table{
        color: black;
        margin-top:25px;
        margin-left:25px;
    }
    h2{
        color: black;
    }
    /* .pic{
        height:200px ;
        width: 200px;

    } */
    td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
    td img{
        height: 60px;
        width: 60px;

    }
.col-12{
  
padding-left: 2%;
  width: 100%;
}

    #myInput {
  background-image: url('/css/searchicon.png');
  background-position: 10px 10px;
  background-repeat: no-repeat;
  width: 100%;
  font-size: 16px;
  padding: 12px 20px 12px 40px;
  border: 1px solid #ddd;
  margin-bottom: 12px;}
#myTable {
  border-collapse: collapse;
  width: 100%;
  border: 1px solid #ddd;
  font-size: 18px;
}

#myTable th, #myTable td {
  text-align: left;
  padding: 12px;
}

#myTable tr {
  border-bottom: 1px solid #ddd;
}

#myTable tr.header, #myTable tr:hover {
  background-color: #f1f1f1;
}
  

</style>

<?php

 
  $sql=" SELECT * FROM `rentinfo` WHERE Status = 'Pending'";
   
  require '../db/dbconnect.php';

  $container= getDataFromDB($sql);




  ?>
  <h2 align="center">Rent info list</h2>
  <!-- <div class="col-12">
  <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search here...." title="Type in a name">
  </div> -->

  <table class="table table-sm"  width="95%">
      <tr>
          <th>Serial No</th>
         
          <th>Name</th>
          <th>Phone Number</th>
          <th>Email</th>
          <th>NID NO</th>
          <th>Date of birth</th>
          <th>Address</th>
          <th>Vehicle ID</th>
          <th>Pick up</th>
          <th>Pick up Date</th>
          <th>Pick up time</th>
          <th>Drop off</th>
          <th>Drop of date</th>
          <th>Drop of Time</th>
          <th>Tour Time</th>
          <th>Tour Fare</th>
          <th>Status</th>
         
         



      </tr>

      <?php 
          foreach($container as $row){
      ?>

              <tr>
                  <td><?php echo $row["SerialNo"] ?></td>
                  <td><?php echo $row["FName"].' '.$row["LName"] ?></td>
                
                  <td><?php echo $row["PhoneNo"] ?></td>
                  <td><?php echo $row["Email"] ?></td>
                  <td><?php echo $row["NID"] ?></td>
                  <td><?php echo $row["DOB"] ?></td>
                  <td><?php echo $row["Address"] ?></td>
                  <td><?php echo $row["VehicleID"] ?></td>
                  <td><?php echo $row["PickUp"] ?></td>
                  <td><?php echo $row["PickUpDate"] ?></td>
                  <td><?php echo $row["PickUpTime"] ?></td>
                  <td><?php echo $row["DropOff"] ?></td>
                  <td><?php echo $row["DropOffDate"] ?></td>
                  <td><?php echo $row["DropOffTime"] ?></td>
                  <td><?php echo $row["TourTime"] ?></td>
                  <td><?php echo $row["TourFare"] ?></td>
                  
                  <td><?php echo $row["Status"] ?></td>
                 








              </tr>

          <?php


          }
          ?>
  </table>
