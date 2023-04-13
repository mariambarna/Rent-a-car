<!DOCTYPE html>
<html lang="en">

<head>
    <style>
        * {
            box-sizing: border-box;
        }

        .main {
            box-shadow: 0px 0px 10px gainsboro;
            padding: 0px !important;
/*            border-radius: 10px;*/
        }

        /* Create two equal columns that floats next to each other */
        .column {
            float: left;
            width: 50%;
            padding: 10px;
            height: 300px;
            /* Should be removed. Only for demonstration */
        }

        /* Clear floats after the columns */
        .row:after {
            content: "";
            display: table;
            clear: both;
        }

        /*
        h1 {
            padding-left: 600px;
            padding-bottom: 50px;


        }

        h3 {
            padding-top: 100px;
            padding-left: 700px;

        }
*/

    </style>
    <title>Home</title>
    <script src="jquery.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdeliver.net/npm/popper.js@1.16.1/dist/umb/popper.min.js"></script>
    <script src="bootstrap/js/bootstrap.bundle.js"></script>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">

    <script src="https://kit.fontawesome.com/1e2c5a8858.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/pra.css">
</head>

 <body style="background:#22313a;"> 

<!--<body class="bg-secondary">-->
    <div class="container mt-4 mb-4 main">

        <div class="header">
            <div class="row">
                <div class="logo col-3 pt-3">
                    <b> RENTAL VEHICLES</b>
                </div>

                <div class="col-5 pt-3">
                    <div class="searchbar">
                        <div class="row">
                            <div class="col-7">
                                <input type="text" class="form-control" placeholder="Search">
                            </div>
                            <div class="row">
                                <div class="col-1">
                                    <div class="input-group">
                                        <div class="input-group-aprepend">
                                            <span class="input-group-text">
                                                <a title="search" href="#" class="ii"> <i class="fa-solid fa-magnifying-glass"></i></a>

                                            </span>
                                        </div>
                                    </div>

                                </div>
                            </div>


                        </div>
                    </div>
                </div>
                <div class="col-4 pl-5 pt-4 text-right pr-5">
                    <a title="Login" href="signin.php" class="mme">
                        <i class="fa-solid fa-arrow-right-to-bracket"></i></a>


                    <a title="Register" href="ownerreg.php" class="mie">
                        <i class="fa-solid fa-address-card"> </i></a>
                </div>
            </div>
        </div>

        <div class="container p-0 ">
            <div class="containerr pl-3 text-light ">

                <div class="navbar navbar-expand-sm  ">
                    <ul class="navbar-nav">
                        <li class="nav-item"><a href="pra.php" class="nav-link">Home</a></li>
                        <li class="nav-item"><a href="about.php" class="nav-link">About</a></li>
                        <li class="nav-item"><a href="car.php" class="nav-link">Vehicles</a></li>
                        <li class="nav-item"><a href="book.php" class="nav-link">Booking</a></li>
                        <li class="nav-item"><a href="contact.php" class="nav-link">Contact</a></li>

                    </ul>

                </div>
            </div>
        </div>
        <?php 
        session_start();
        $_SESSION['PickUp'] = $_POST['pickup'];
        $_SESSION['PickUpDate'] = $_POST['pickupdate'];
        $_SESSION['PickUpTime'] = $_POST['pickuptime'];
        $_SESSION['SeatNumber'] = $_POST['seatnumber'];
        $_SESSION['DropOffDate'] = $_POST['dropoffdate'];
        $_SESSION['DropOffTime'] = $_POST['dropofftime'];
        $_SESSION['DropOff'] = $_POST['dropoff'];
        ?>
        
        <div class="container p-0">
            <?php
            include_once ('db/dbconnect.php');
            if($_POST['seatnumber'] == 5){
                $sql = "SELECT * FROM users WHERE NumberofSeat <= 5 AND Status = 'Approved' AND Availability = 'Available'";
            }
            elseif($_POST['seatnumber'] == 11){
                $sql = "SELECT * FROM users WHERE NumberofSeat <= 11 and NumberofSeat > 5 AND Status = 'Approved' AND Availability = 'Available'";
            }
            elseif($_POST['seatnumber'] == 17){
                $sql = "SELECT * FROM users WHERE NumberofSeat <= 17 and NumberofSeat > 11 AND Status = 'Approved' AND Availability = 'Available'";
            }
            else{
                $sql = "";
                echo 'Invelid info';
            }
            
            $res = getDataFromDB($sql);
            foreach ($res as $row){
                ?>
                <div class="row">
                    <div class="col-6">
                        
                    <img src="<?php echo $row['Image'] ?>" style="height:350px;" class="d-block w-100 mb-3" alt="...">
                                            
                    </div>
                    <div class="col-6 mb-3">
                    <div class="card bg-dark pl-5 pt-3">
                                        <div class="card-body text-light  ">
                                            <div class="card-text ">
                                               
                                            </div>
                                            <div class="card-text">
                                                <h2><?php echo $row['Fare'] ?> Taka/Day</h2>
                                            </div>
                                          
                                            <div class="card-text">
                                            <h2> Model:<?php echo $row['Model'] ?></h2>
                                            </div>
                                           
                                            <div class="card-text">
                                            <h2> Vehiclesbrand: <?php echo $row['Vehiclesbrand'] ?></h2>
                                            </div>
                                           
                                            <div class="card-text">
                                            <h2> Color: <?php echo $row['Color'] ?></h2>
                                            </div>
                                          
                                            <div class="card-text">
                                            <h2> Seat: <?php echo $row['NumberofSeat'] ?></h2>
                                            </div><button class="ma"><a href="booking.php?id=<?php echo $row ['serialno']?>">BOOK NOW</a></button>



                                        </div>
                                    </div>
              
                    </div>
                </div>
              
             
                <?php
            }
            
            ?>
        </div>

      

       

        <!--////-->
       
      





                <!--///-->
                <div class="pt-5">
                    <div class="container">


                        <div class="row pt-5 p-4">
                     
                            <div class="row  p-0 pt-5 ">
                                <div class="container bg-dark text-light">
                                    <h2 class="text-center pt-3 pb-5">--info--</h2>

                                    <div class="row">
                                        <div class="column">
                                            <h2>About RENTAL CAR </h2>
                                            <div>
                                                <h5> its a good app ,very good
                                                    i am the owner .its mine.
                                                    i invented it. pretty good huh!!
                                                    its my second invention </h5>
                                            </div>
                                        </div>
                                        <div class="column pl-5">
                                            <h2>Contact INFO</h2>
                                            <div>
                                                <h5>Admin number</h5>
                                            </div>
                                            <div>
                                                <h5> 012222222222</h5>
                                            </div>
                                            <div>
                                                <h5> EMAIL:</h5>
                                            </div>
                                            <div>
                                                <h5> asas@gmail.com</h5>
                                            </div>
                                        </div>
                                    </div>






                                </div>


                            </div>
                        </div>

                    </div>


                </div>
</body>

</html>
