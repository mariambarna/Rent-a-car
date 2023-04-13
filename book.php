<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book NOW</title>
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
<body>
<body style="background:#22313a;"> 
<form action="suggestion.php" method="post" class=" p-4">
<!--<body class="bg-secondary">-->
    <div class="container mt-4 mb-4 main">

        <div class="header">
            <div class="row">
                <div class="logo col-3 pt-3 text-info">
                    <b><i class="fas fa-car-side"></i>  BARNA ENTERPRISE</b>
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
                        <li class="nav-item"><a href="Book.php" class="nav-link">Booking</a></li>
                        <li class="nav-item"><a href="contact.php" class="nav-link">Contact</a></li>

                    </ul>

                </div>
            </div>
        </div>
       
     <!-- ...card-deck.... -->
     <div class="container bg-info">
     <h1 class="text-center text-dark  pt-5 pb-2">Book Now</h1>
   <div class="card-group mt-3 pt-5 pb-3 ">
    <div class="card "style="background-image: url('image/art.jpg');">
      <div class="card-body text-center">
<!-- ............ -->
<!-- <div id="demo" class="container p-0 carousel slide demo" data-ride="carousel"> -->

<!-- Indicators -->
<!-- <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
</ul> -->

<!-- The slideshow -->
<!-- <div class="carousel-inner">
    <div class="carousel-item active">
        <img src="image/pro.jpg" alt="Los Angeles">
    </div>
    <div class="carousel-item">
        <img src="image/pr.jpeg" alt="Chicago">
    </div>
    <div class="carousel-item">
        <img src="image/black.jpg" alt="New York">
    </div>
</div> -->

<!-- Left and right controls -->
<!-- <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
</a>
<a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
</a> -->

<!-- 
</div>  -->













       </div>
    </div>
    
    <div class="card  text-dark bg-info p-3">
      <div class="card-body text-center">
       <h2 class="card-text text-dark ">BOOK HERE</h2>
         </div>
       
         <label for="">Pick Up Point</label>
                        <input type="text"  name="pickup" class="form-control form-control-sm p-4 mb-3">
                   
                        <label for="">Pick Up Date</label>
                        <input type="date" name="pickupdate" class="form-control form-control-sm p-4 mb-3">
                        <label for="">Pick Up Time</label>
                        <input type="time" name="pickuptime" class="form-control form-control-sm p-4 mb-3">
                   
                       
                        <label for="">Seat Needed Without Driver</label>
                       <select name="seatnumber" class="form-control form-control-sm p-4 mb-3" id="">
                           <option value="">Select number of seats excluded driver</option>
                           <option value="5">Maximum 4</option>
                           <option value="11">Maximum 10</option>
                           <option value="17">Maximum 16</option>
                       </select>
                        
                       <label for="">Drop Off Date</label>
                        <input type="date" name="dropoffdate" class="form-control form-control-sm p-4 mb-3">
                   
                        <label for="">Drop Off Time</label>
                        <input type="time" name="dropofftime" class="form-control form-control-sm p-4 mb-3">
                   
                        <label for="">Drop Off Point</label>
                        <input type="text" name="dropoff" class="form-control form-control-sm p-4 mb-3">
                   
                        <button class="btn mt-3 mb-3 btn-block btn-dark p-2"><a title="submit" href="#"></a>Submit</button>
                  
      </div>
    </div>
    
  </div>
</div>

<!-- <........................> -->



</div>

</body>
</html>