<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Register</title>
    <script src="jquery.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdeliver.net/npm/popper.js@1.16.1/dist/umb/popper.min.js"></script>
    <script src="bootstrap/js/bootstrap.bundle.js"></script>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">

    <script src="https://kit.fontawesome.com/1e2c5a8858.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/owner.css">

</head>

<body style="background:#22313a;">
<form action="server/reg.php" method="post" enctype="multipart/form-data">
    <div class="lo">
        <div class="row">
            <div class="container mb-5 mt-5 ">
                <div class="row">
                    <div class="col-4 bg">
                    </div>
                    <div class="col-8">
                        <div class="row ">
                            <div class="col-1 bg-primary text-light pr-0 mr-0">
                                <h1 class="mb-3 mt-1">O</h1>
                                <h1 class="mb-3">W</h1>
                                <h1 class="mb-3">N</h1>
                                <h1 class="mb-3">E</h1>
                                <h1 class="mb-3">R</h1>
                            </div>
                            <div class="col-11  pl-0 ml-0">
                                <div class="card-group mt-1 mb-1">
                                    <div class="card p-3">
                                        <label for="">First Name</label>
                                        <input type="text" id="" name="FirstName" class="form-control form-control-sm" placeholder="First Name">
                                    </div>
                                    <div class="card p-3">
                                        <label for="">Last Name</label>
                                        <input type="text" id="" name="LastName" class="form-control form-control-sm" placeholder="Last Name">
                                    </div>
                                    <div class="card p-3">
                                        <label for="">Email</label>
                                        <input type="email" id="" name="Email" class="form-control form-control-sm" placeholder="Email">
                                    </div>



                                </div>

                                <div class="card-group mt-1 mb-1">
                                    <div class="card p-3">
                                        <label for="">Date of Birth</label>
                                        <input type="Date" id="" name="DateofBirth" class="form-control form-control-sm">
                                    </div>
                                    <div class="card p-3">
                                        <label for="">Phone Number</label>
                                        <input type="number" id="" name="PhoneNumber" class="form-control form-control-sm" placeholder="Phone Number">
                                    </div>
                                    <div class="card p-3">
                                        <label for="">NID NO</label>
                                        <input type="number" id="" name="NIDNO" class="form-control form-control-sm" placeholder="NID NO">
                                    </div>


                                </div>

                                <div class="card-group mt-1">
                                    <div class="card p-3">
                                        <label for="">Address</label>
                                        <input type="text" id="" name="Address" class="form-control form-control-sm" placeholder="Address">
                                    </div>
                                    <div class="card pt-3 pl-1">
                                        <label for="">Gender</label>
                                        <div class="row">
                                            <div class="col-1"><input type="radio" name="Gender" value="Male" class="clearfix" checked style="display: inline;"></div>
                                            <div class="col-3">M</div>
                                            <div class="col-1"><input type="radio" name="Gender"  value="Female" class="clearfix" checked style="display: inline;"></div>
                                            <div class="col-3"> F</div>
                                        </div>


                                    </div>
                                    <div class="card p-3">
                                        <label for="">Password</label>
                                        <input type="password" id="" name="Password"  class="form-control form-control-sm" placeholder="Password">
                                    </div>
                                </div>

                            </div>

                        </div>

                        <div class="row">
                            <div class="col-1 bg-danger text-light pr-0 mr-0">
                                <h4 class="mb-3 mt-2">V</h4>
                                <h4 class="mb-3">E</h4>
                                <h4 class="mb-3">H</h4>
                                <h4 class="mb-3">I</h4>
                                <h4 class="mb-3">C</h4>
                                <h4 class="mb-3">L</h4>
                                <h4 class="mb-3">E</h4>
                            </div>
                            <div class="col-11  pl-0 ml-0">
                                <div class="card-group mt-1 mb-1">
                                    <div class="card p-3">
                                        <label for=""> Vehicles brand</label>
                                        <input type="text" id="" name="Vehiclesbrand" class="form-control form-control-sm" placeholder="Vehicles brand">
                                    </div>
                                    <div class="card p-3">
                                        <label for="">Model</label>
                                        <input type="text" id="" name="Model" class="form-control form-control-sm" placeholder="Model">
                                    </div>




                                </div>

                                <div class="card-group mt-1 mb-1">
                                    <div class="card p-3">
                                        <label for="">Registration No</label>
                                        <input type="text" id="" name="RegistrationNo" class="form-control form-control-sm" placeholder="Registration No.">
                                    </div>
                                    <div class="card p-3">
                                        <label for="">Registration Date</label>
                                        <input type="date" id="" name="RegistrationDate" class="form-control form-control-sm">
                                    </div>
                                </div>
                                <div class="card-group mt-1">
                                    <div class="card p-3">
                                        <label for="">Color</label>
                                        <input type="text" id="" name="Color" class="form-control form-control-sm" placeholder="Model">
                                    </div>
                                    <div class="card p-3">
                                        <label for="">Number of Seat</label>
                                        <input type="text" id="" name="NumberofSeat" class="form-control form-control-sm" placeholder="Number of seat">
                                    </div>



                                </div>

                            </div>
                        </div>

                        <div class="row">
                            <div class="col-1 bg-info text-light pr-0 mr-0">
                                <h3 class="mb-3 mt-2">D</h3>
                                <h3 class="mb-3">R</h3>
                                <h3 class="mb-3">I</h3>
                                <h3 class="mb-3">V</h3>
                                <h3 class="mb-3">E</h3>
                                <h3 class="mb-3">R</h3>
                            </div>
                            <div class="col-11  pl-0 ml-0">
                                <div class="card-group mt-1 mb-1">
                                    <div class="card p-3">
                                        <label for="">First Name</label>
                                        <input type="text" id="" name="fname" class="form-control form-control-sm" placeholder="First number">
                                    </div>
                                    <div class="card p-3">
                                        <label for="">Last Name</label>
                                        <input type="text" id="" name="lname" class="form-control form-control-sm" placeholder="last number">
                                    </div>
                                    <div class="card p-3">
                                        <label for="">Email</label>
                                        <input type="email" id="" name="emal" class="form-control form-control-sm" placeholder="Email">
                                    </div>



                                </div>
                                <div class="card-group mt-1 mb-1">
                                    <div class="card p-3">
                                        <label for="">Phone Number</label>
                                        <input type="number" id="" name="PNumber" class="form-control form-control-sm" placeholder="Phonenumber">
                                    </div>
                                    <div class="card p-3">
                                        <label for="">NID card</label>
                                        <input type="number" id="" name="Ncard" class="form-control form-control-sm" placeholder="Nid card">
                                    </div>
                                    <div class="card p-3">
                                        <label for="">Date of birth</label>
                                        <input type="date" id="" name="Datebirth" class="form-control form-control-sm">
                                    </div>



                                </div>
                                <div class="card-group">
                                    <div class="card p-3">
                                        <label for="">Address</label>
                                        <input type="text" id="" name="Addres" class="form-control form-control-sm" placeholder="Address">
                                    </div>

                                    <div class="card pt-3 pl-1">
                                        <label for="">Gender</label>
                                        <div class="row">
                                            <div class="col-1"><input type="radio" name="Gen" value="Male"  class="clearfix" checked style="display: inline;"></div>
                                            <div class="col-3">M</div>
                                            <div class="col-1"><input type="radio" name="Gen"  value="Female"  class="clearfix" checked style="display: inline;"></div>
                                            <div class="col-3"> F</div>
                                        </div>

                                   
                                    <div class="card p-3">
                                  
  
    <label for="">files</label>
    <input type="file" class="form-control-file" name="Image"id=""  class="clearfix" checked style="display: inline;">
  

                                  
                                    </div>
                                    <!-- <div class="card p-3">
                                        <label for="">Password</label>
                                        <input type="text" id="" name="Password" class="form-control form-control-sm" placeholder="Password">
                                    </div> -->
                                </div>

                            </div>

                        </div>
                        <button class="btn mt-2 mb-2 btn-block btn-success"><a title="register" href="#"></a>Register</button>
                    </div>


                </div>

            </div>

        </div>


    </div>



</body>

</html>
