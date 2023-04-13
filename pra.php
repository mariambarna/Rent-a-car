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

        
        .column {
            float: left;
            width: 50%;
            padding: 10px;
            height: 300px;
       
        }

  
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
    <div class="container mb-4 main">

        <div class="header">
            <div class="row">
                <div class="logo col-3 pt-3 text-info">
                    <b><i class="fas fa-car-side"></i>  BARNA ENTERPRISE</b>
                </div>

                <div class="col-5 pl-3 pt-3">
                    <div class="searchbar">
                        <div class="row">
                            <div class="col-7 ml-5">
                                <input type="text" class="form-control " placeholder="Search">
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


                    <a title=" Car Owner Register" href="ownerreg.php" class="mie">
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

        <div id="demo" class="container p-0 carousel slide demo" data-ride="carousel">

          
            <ul class="carousel-indicators">
                <li data-target="#demo" data-slide-to="0" class="active"></li>
                <li data-target="#demo" data-slide-to="1"></li>
                <li data-target="#demo" data-slide-to="2"></li>
            </ul>

           
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="image/pro.jpg" alt="Los Angeles">
                </div>
                <div class="carousel-item">
                    <img src="image/pr.jpeg" alt="Chicago">
                </div>
                <div class="carousel-item">
                    <img src="image/black.jpg" alt="New York">
                </div>
            </div>

        
            <a class="carousel-control-prev" href="#demo" data-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </a>
            <a class="carousel-control-next" href="#demo" data-slide="next">
                <span class="carousel-control-next-icon"></span>
            </a>


        </div>

        <div class="searchform mb-5 bg-light">
            <form action="suggestion.php" method="post" class="">
                <div class="card-group">
                    <div class="card p-2">
                       <label for="">Pick Up Point</label>
                        <input type="text"  name="pickup" class="form-control form-control-sm">
                    </div>
                    <div class="card p-2">
                       <label for="">Pick Up Date</label>
                        <input type="date" name="pickupdate" class="form-control form-control-sm">
                    </div>
                    <div class="card p-2">
                       <label for="">Pick Up Time</label>
                        <input type="time" name="pickuptime" class="form-control form-control-sm">
                    </div>
                    <div class="card p-2">
                       
                       <label for="">Seat Needed Without Driver</label>
                       <select name="seatnumber" class="form-control form-control-sm" id="">
                           <option value="">Select number of seats excluded driver</option>
                           <option value="5">Maximum 4</option>
                           <option value="11">Maximum 10</option>
                           <option value="17">Maximum 16</option>
                       </select>
                        
                    </div>
                </div>
                   
                <div class="card-group">
                    
                    
                    <div class="card p-2">
                       <label for="">Drop Off Date</label>
                        <input type="date" name="dropoffdate" class="form-control form-control-sm">
                    </div>
                    <div class="card p-2">
                       <label for="">Drop Off Time</label>
                        <input type="time" name="dropofftime" class="form-control form-control-sm">
                    </div>
                    <div class="card p-2">
                       <label for="">Drop Off Point</label>
                        <input type="text" name="dropoff" class="form-control form-control-sm">
                    </div>
                    <div class="card p-2 pt-4">
                        <button class="btn btn-block btn-success" type="submit">Search</button>
                    </div>
                </div>
            </form>
        </div>
        <div class="container text-light">

      
            <h3 class="text-center pt-5"> --RENT INFO--</h3>
            <h1 class="text-center pt-3 pb-5">OUR RENTAL FLEET</h1>

            <div class="row p-4">
                <div class="container">
                <form action="book.php" method="post" class=" p-4">
                    <div id="fleet" class="carousel slide fleet" data-ride="carousel">

                        <!-- Indicators -->
                        <!--
                        <ul class="carousel-indicators">
                            <li data-target="#fleet" data-slide-to="0" class="active"></li>
                            <li data-target="#fleet" data-slide-to="1"></li>
                            <li data-target="#fleet" data-slide-to="2"></li>
                            <li data-target="#fleet" data-slide-to="3"></li>
                            <li data-target="#fleet" data-slide-to="4"></li>
                        </ul>
-->

                        <!-- The slideshow -->
                        <div class="carousel-inner">
                            <div class="carousel-item active pl-4">
                                <div class="row">
                                    <div class="col-6">
                                        <img src="image/car@gmail.com.png" alt="Los Angeles">
                                    </div>
                                    <div class="col-6 text-light  p-4">

                                        <h2 class="cca">
                                            6000TK / DAY</h2>

                                        <h5 class="cc"> <i class="fas fa-taxi"></i> Model: Toyota</h5>
                                        <h5 class="cc"> <i class="fas fa-door-open"></i> Doors: 4</h5>
                                        <h5 class="cc"><i class="fas fa-couch"></i> Seats: 4</h5>
                                        <h5 class="cc"><i class="fas fa-gas-pump"></i> Transmission: Auto</h5>

                                        <h5> <button class="mob"><a href="#"></a>BOOK NOW</button>
                                        </h5>






                                    </div>
                                </div>

                            </div>
                            <div class="carousel-item">
                                <div class="row">

                                    <div class="col-6 text-light p-4">
                                        <h2 class="cca">
                                            5000TK / DAY</h2>

                                        <h5 class="cc"> <i class="fas fa-taxi"></i> Model: Toyota</h5>
                                        <h5 class="cc"> <i class="fas fa-door-open"></i> Doors: 4</h5>
                                        <h5 class="cc"><i class="fas fa-couch"></i> Seats: 3</h5>
                                        <h5 class="cc"><i class="fas fa-gas-pump"></i> Transmission: Auto</h5>

                                        <h5> <button class="mob"><a href="#"></a>BOOK NOW</button>
                                        </h5>




                                    </div>
                                    <div class="col-6">
                                        <img src="image/awaa@g.v.jpg" alt="Los Angeles">
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="row">

                                    <div class="col-6 text-light p-4">
                                        <h2 class="cca">
                                            5000TK / DAY</h2>

                                        <h5 class="cc"> <i class="fas fa-taxi"></i> Model: Toyota</h5>
                                        <h5 class="cc"> <i class="fas fa-door-open"></i> Doors: 4</h5>
                                        <h5 class="cc"><i class="fas fa-couch"></i> Seats: 12</h5>
                                        <h5 class="cc"><i class="fas fa-gas-pump"></i> Transmission: Auto</h5>

                                        <h5> <button class="mob"><a href="#"></a>BOOK NOW</button>
                                        </h5>




                                    </div>
                                    <div class="col-6">
                                        <img src="image/c7.jpg" alt="Los Angeles">
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="row">
                                    <div class="col-6">
                                        <img src="image/mi@gmail.com.jpg" alt="Los Angeles">
                                    </div>
                                    <div class="col-6 text-light p-4">

                                        <h2 class="cca">
                                            5000TK / DAY</h2>

                                        <h5 class="cc"> <i class="fas fa-taxi"></i> Model: Toyota</h5>
                                        <h5 class="cc"> <i class="fas fa-door-open"></i> Doors: 2</h5>
                                        <h5 class="cc"><i class="fas fa-couch"></i> Seats: 8</h5>
                                        <h5 class="cc"><i class="fas fa-gas-pump"></i> Transmission: Auto</h5>

                                        <h5> <button class="mob"><a href="#"></a>BOOK NOW</button>
                                        </h5>




                                    </div>
                                </div>
                            </div>
                        </div>

                       
                        <a class="carousel-control-prev" href="#fleet" data-slide="prev">
                            <span class="carousel-control-prev-icon"></span>
                        </a>
                        <a class="carousel-control-next" href="#fleet" data-slide="next">
                            <span class="carousel-control-next-icon"></span>
                        </a>


                    </div>
                </div>
            </div>
            <!--        </div>-->
        </div>






        <!--////-->
        <div class=" pt-5">
            <div class="container pt-5 ">
                <h3 class="text-center text-light pt-5 pb-5"> WHY CHOOSE US??</h3>

                <div class="row pt-5 p-4">
                    <div class="container">
                        <div id="flet" class=" flet">



                            
                            <div class="row">
                                <div class="col-6 pt-5">
                                    <img src="image/j.png" alt="Los Angeles">
                                </div>
                                <div class="col-6 text-light pl-4 p-4">

                                    <h2 class="text-center pt-1 pb-5">THE BEST DEAL YOU WILL NEVER FIND</h2>
                                    <p>
                                    <h3> <i class="fas fa-user-secret"></i> Expert drivers</h3>
                                    <h5>All driver has there driving license. they kno what to do</h5>

                                    <h3><i class="fas fa-coins"></i> No Hidden Charges</h3>
                                    <h5>All driver has there driving license. they kno what to doll driver has there driving license. they kno what to do</h5>
                                    <h3><i class="fas fa-handshake"></i> Friendly Behavious</h3>

                                    <h5>All driver has there driving license. they kno what to doll driver has there driving license. they kno what to do</h5>



                                </div>

                            </div>


                           



                        </div>
                    </div>
                </div>
            </div>

        </div>


        <!--        <div class="row">-->


                   <h1 class="text-center pt-5 pb-5">.</h1>

        <div class="row p-4">
            <div class="container pt-5">
                <div id="feet" class="carousel slide feet" data-ride="carousel">

                    <!--
                         Indicators 
                        <ul class="carousel-indicators">
                            <li data-target="#feet" data-slide-to="0" class="active"></li>
                            <li data-target="#feet" data-slide-to="1"></li>
                            <li data-target="#feet" data-slide-to="2"></li>

                        </ul>
-->

                  
                    <div class="carousel-inner">
                        <div class="carousel-item active pl-4">
                            <div class="row">
                                <div class="col-6">
                                    <img src="image/a.png" alt="Los Angeles">
                                </div>
                                <div class="col-6 text-light  p-4">

                                    <p>
                                    <h2>
                                        <i class="fas fa-car-side"></i> Find a Car
                                    </h2>

                                    <!-- <h5>Model: SUV</h5>
                                         <h5>Doors: 4</h5> 
                                         <h5> Seats: 3</h5> 
                                         <h5> Transmission: Auto</h5> 
                                       
                                         <h5>    <button class="mob"><a href="#"></a>BOOK NOW</button>
     </h5> 
      -->

                                    </p>



                                </div>
                            </div>

                        </div>
                        <div class="carousel-item">
                            <div class="row">

                                <div class="col-6 text-light p-4">
                                    <p>
                                    <h2>
                                        <i class="fas fa-search-location"></i> Put your location on Confirm rent
                                    </h2>




                                    </p>

                                </div>
                                <div class="col-6">
                                    <img src="image/f.png" alt="Los Angeles">
                                </div>
                            </div>
                        </div>

                        <div class="carousel-item">
                            <div class="row">
                                <div class="col-6">
                                    <img src="image/m.png" alt="Los Angeles">
                                </div>
                                <div class="col-6 text-light p-4">

                                    <p>
                                    <h2><i class="fas fa-car-bus"></i> Make ride</h2>


                                    </p>

                                </div>
                            </div>
                        </div>
                    </div>

                    
                    <a class="carousel-control-prev" href="#feet" data-slide="prev">
                        <span class="carousel-control-prev-icon"></span>
                    </a>
                    <a class="carousel-control-next" href="#feet" data-slide="next">
                        <span class="carousel-control-next-icon"></span>
                    </a>


                </div>

                <!--        </div>-->







                <!--///-->
                <div class="pt-5">
                    <div class="container">


                        <div class="row pt-5 p-4">
                            <div class="container">
                                <h4 class="text-center text-light  pt-5 ">-- Pricing--</h4>
                                <h1 class="text-center text-light  pt-3 pb-5">Pricing Plan</h1>
                                <div class="card-deck">

                                    <div class="card bg-dark">
                                        <div class="card-body text-light text-center">
                                            <div class="card-text ">
                                                <h5>2 DAYS </h5>
                                            </div>
                                            <div class="card-text">
                                                <h2>10000 tk</h2>
                                            </div>
                                            <p class="card-text ">--------------------</p>
                                            <div class="card-text">
                                                <h5>Full Dhaka Sideseen</h5>
                                            </div>
                                            <p class="card-text ">--------------------</p>
                                            <div class="card-text">
                                                <h5>Fuel & Gas included</h5>
                                            </div>
                                            <p class="card-text ">---------------------</p>
                                            <div class="card-text">
                                                <h5>Driver included</h5>
                                            </div>
                                            <p class="card-text ">----------------------</p>
                                            <div class="card-text">
                                                <h5>No Cancellation</h5>
                                            </div>

                                            <button class="ma"><a href="#"></a>BOOK NOW</button>



                                        </div>
                                    </div>
                                    <div class="card bg-dark">
                                        <div class="card-body text-light text-center">
                                            <div class="card-text ">
                                                <h5>3 DAYS </h5>
                                            </div>
                                            <div class="card-text">
                                                <h2>15000 tk</h2>
                                            </div>
                                            <p class="card-text ">--------------------</p>
                                            <div class="card-text">
                                                <h5>1 car for Daylong</h5>
                                            </div>
                                            <p class="card-text ">--------------------</p>
                                            <div class="card-text">
                                                <h5>Fuel & Gas included</h5>
                                            </div>
                                            <p class="card-text ">--------------------</p>
                                            <div class="card-text">
                                                <h5>Driver included</h5>
                                            </div>
                                            <p class="card-text ">--------------------</p>
                                            <div class="card-text">
                                                <h5>No Cancellation</h5>
                                            </div>

                                            <button class="ma"><a href="#"></a>BOOK NOW</button>

                                        </div>
                                    </div>
                                    <div class="card bg-dark">
                                        <div class="card-body text-light text-center">
                                            <div class="card-text ">
                                                <h5>5 DAYS </h5>
                                            </div>
                                            <div class="card-text">
                                                <h2>20000 tk</h2>
                                            </div>
                                            <p class="card-text ">--------------------</p>
                                            <div class="card-text">
                                                <h5>1 car for full day</h5>
                                            </div>
                                            <p class="card-text ">--------------------</p>
                                            <div class="card-text">
                                                <h5>Fuel & Gas included</h5>
                                            </div>
                                            <p class="card-text ">--------------------</p>
                                            <div class="card-text">
                                                <h5>Driver included</h5>
                                            </div>
                                            <p class="card-text ">--------------------</p>
                                            <div class="card-text">
                                                <h5>No Cancellation</h5>
                                            </div>

                                            <button class="ma"><a href="#"></a>BOOK NOW</button>

                                        </div>
                                    </div>
                                </div>
                            </div>

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
