<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact us</title>
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
                        <li class="nav-item"><a href="book.php" class="nav-link">Booking</a></li>
                        <li class="nav-item"><a href="contact.php" class="nav-link">Contact</a></li>

                    </ul>

                </div>
            </div>
        </div>
       
     <!-- ...card-deck.... -->
     <div class="container "> 
        
<form action="server/contacts.php" method="post">
         <h1 class="text-center text-light  pt-5 pb-2">Contact Us</h1>
   <div class="card-group mt-3 pt-5 pb-3 ">
 
    <div class="card   text-light p-4" style="background:#22313a;">
      <div class="card-body text-center">
        
      <h1 class="card-text mb-5">OUR MAP</h1>
        <!-- <iframe height="300px" width="300px"></iframe> -->
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14602.702518325501!2d90.34510368037557!3d23.79456245308028!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c0e96fce29dd%3A0x6ccd9e51aba9e64d!2sMirpur-1%2C%20Dhaka!5e0!3m2!1sen!2sbd!4v1660816232416!5m2!1sen!2sbd" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>



            
        <!-- <p class="card-text">Some text inside the first card</p>
        <p class="card-text">Some more text to increase the height</p>
         -->
      </div>
    </div>
    
    
    <div class="card  text-light p-4" style="background:#22313a;">
      <div class="card-body text-center">
       <h2 class="card-text text-light mb-3 "> Write down your massage</h2>
         </div>
      <label for="">Name</label>
                                        <input type="text" id="" name="Name" class="form-control form-control-sm p-4 mb-3" placeholder=" Name">
                                       
                                   
                                        <label for="">Email</label>
                                        <input type="email" id="" name="Email" class="form-control form-control-sm p-4 mb-3" placeholder="Email">


                                        <label for="">Subject</label>
                                        <input type="text" id="" name="Subject" class="form-control form-control-sm p-4 mb-3" placeholder="Subject">

                                        <label for="">Your Massage</label>
                                        <input type="text" id="" name="Massage" class="form-control form-control-sm p-4 mb-3" placeholder="Massage">

                                        <button class="btn mt-3 mb-3 btn-block btn-info p-2"><a title="submit" href="#"></a>Submit</button>
                  

        <!-- <p class="card-text">Some text inside the fourth card</p> -->
      <!-- </div> -->
    </div>  
  </div>
</div>


<!-- <...................> -->

<div class="container">
  <h2 class="text-center text-light  pt-5 pb-5">Contact Information</h2>
 
  <div class="card-columns">
    <div class="card  mb-5 bg-info">
      <div class="card-body text-center">
        <h4 class="card-text p-2">Phone Number</h4>
        <h4 class="card-text">01222222222</h4>
      </div>
    </div>
    <div class="card bg-info">
      <div class="card-body text-center">
        <h4 class="card-text p-2">Email</h4>
        <h4 class="card-text">email@gmail.com</h4>
      </div>
    </div>
    <div class="card bg-info">
      <div class="card-body text-center">
        <h4 class="card-text p-2">Address</h4>
        <h4 class="card-text">Mirpur-1,Dhaka</h4>
      </div>
    </div>
    
  </div>
</div>


<!-- <........................> -->

</div>
</div>

</div>


</div>

</body>
</html>