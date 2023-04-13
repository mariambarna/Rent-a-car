<!DOCTYPE html>
<html>
<head>
    <title>Registration Form</title>
    <link rel="stylesheet" href="style.css">
</head>

    <body>
        <div class="right">
      
            <form action="server/registration_add.php" method="post">
          <h1>Registration Form</h1>
          
          <div class="timee">
            <div class="linee">First Name </div>
            <div class="somee"><input type="text" name="Firstname" placeholder="Enter your First Name..." ></div> 
         </div> 
        <div class="timee">
             <div class="linee">Last Name </div>
             <div class="somee"><input type="text" name="Lastname" placeholder="Enter your Last Name..." ></div> 
          </div>
 
          <!-- <div class="timee">
             <div class="linee">Department </div>
 
             <div class="somee"> <select name="Department">
       
             <option>Select your Department</option>
             <option value="CSE">CSE</option>
             <option value="EEE">EEE</option>
             <option value="BBA">BBA</option>
             <option value="ENGLISH">ENGLISH</option>
       
            </select></div> -->
            
     
        
         <div class="timee">
             <div class="linee">Phone Number </div>
             <div class="somee"><input type="text" name="PhoneNumber" placeholder="Enter your Number..." ></div> 
          </div>
         
          <div class="timee">
             <div class="linee">Email </div>
             <div class="somee"><input type="email" name="Email" id="email" placeholder="Enter your Email... " ></div> 
          </div>
          <div class="timee">
             <div class="linee">Date of Birth </div>
             <div class="somee"><input type="date" name="Dateofbirth"></div> 
          </div>
          
            
          <div class="timee">
             <div class="linee">Address</div>
             <div class="somee"><textarea name="Address"  cols="40" rows="3"></textarea></div> 
          </div>
          <div class="timee">
             <div class="linee">Password</div>
             <div class="somee"><input type="password" name="Password" placeholder="Enter your Password..."></div> 
          </div>
           
           <div class="buut">
           <button type="submit" value="submit">Submit</button>
           <!-- <button type="reset">Reset</button> -->
        </div>
        
          </from>

     </div>
    </body>

</html>