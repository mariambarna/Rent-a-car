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
        height: 50px;
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
  <h2 align="center">owner list</h2>
   <!-- <div class="col-12">
  <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search here...." title="Type in a name">
  </div> -->

  <table id= 'myTable'> 
      <tr>
      <th>Serial No</th>
          <th>FirstName</th>
          <th>LastName</th>
          <th>Email</th>
          <th>DateofBirth</th>
          <th>PhoneNumber</th>
          <th>NIDNO</th>
          <th>Address</th>
          <th>Gender</th>
          <th>Action</th>
         
          
          
          



      </tr>

      <?php 
          foreach($container as $row){
      ?>

              <tr>
                 
                  <td><?php echo $row["serialno"] ?></td>
                  <td><?php echo $row["firstName"] ?></td>
                  <td><?php echo $row["LastName"] ?></td>
                  <td><?php echo $row["Email"] ?></td>
                  <td><?php echo $row["DateofBirth"] ?></td>
                  <td><?php echo $row["PhoneNumber"] ?></td>
                  <td><?php echo $row["NIDNO"] ?></td>
                  <td><?php echo $row["Address"] ?></td>
                  <td><?php echo $row["Gender"] ?></td>
                  <td><a href="deleteowner.php?id=<?php echo $row['serialno'] ?>" class="btn btn-danger btn-sm">Delete</a></td>
               
                  








              </tr>

          <?php


          }
          ?>
  </table>

  <?php


?>