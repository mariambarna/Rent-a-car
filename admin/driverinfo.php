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
    td img{
        height: 60px;
        width: 60px;

    }
.col-12{
padding-left: 2%;
  
  width: 100%;
}
td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
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

 
  $sql=" SELECT * FROM `users` WHERE Status = 'Approved' AND userrole ='owner'";
   
  require '../db/dbconnect.php';

  $container= getDataFromDB($sql);




  ?>
  <h2 align="center">Driver list</h2>
  <!-- <div class="col-12">
  <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search here...." title="Type in a name">
  </div> -->

  <table id= 'myTable' width="95%">
      <tr>
          <th>Sreial No</th>
          <th> Driver FirstName</th>
          <th> Driver LastName</th>
          <th> Driver Email</th>
          <th> Driver PhoneNumber</th>
          <th> Driver NIDNO</th>
          <th> Date of Birth</th> 
          <th> Driver Address</th>
          <th> Driver Gender</th>
          
         
         



      </tr>

      <?php 
          foreach($container as $row){
      ?>

              <tr>
                  <td><?php echo $row["serialno"] ?></td>
                  <td><?php echo $row["fname"] ?></td>
                  <td><?php echo $row["lname"] ?></td>
                  <td><?php echo $row["emal"] ?></td>
                  <td><?php echo $row["PNumber"] ?></td>
                  <td><?php echo $row["Ncard"] ?></td>
                  <td><?php echo $row["Datebirth"] ?></td>
                  <td><?php echo $row["Addres"] ?></td>
                  <td><?php echo $row["Gen"] ?></td>








              </tr>

          <?php


          }
          ?>
  </table>
