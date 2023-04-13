<!DOCTYPE html>
<html>
<head>
    <!-- <title>Login Form</title> -->
    <link rel="stylesheet" type="text/css" href="css/login.css">
</head>

    <body style="background:#22313a;">



<div class="box">
  <h2>Login</h2>
  <form action="log.php" method="post">
    <div class="inputBox">
      <input type="email" name="Email" required onkeyup="this.setAttribute('value', this.value);" value="">
      <label>Email</label>
    </div>
    <div class="inputBox">
      <input type="Password" name="Password" required value=""
             onkeyup="this.setAttribute('value', this.value);" >
           
      <label>Password</label>
    </div>
    <input type="submit"  value="submit">
  </form>
</div>
</body>
</html>