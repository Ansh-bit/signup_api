<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="signup.css">
</head>
<body>

<form action="welcome.php" method="post">
  <div class="container">
    <h1>Register</h1>
    <p>Please fill in this form to create an account.</p>
    <hr>
    
    <label for="psw-repeat"><b>Name</b></label>
    <input type="text" placeholder="Enter your Name" name="name" id="name" required>
    

    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email" id="email" required>
     
    <label for="psw-repeat"><b>Mobile</b></label>
    <input type="tel" placeholder="Mobile no." name="mobile" id="mobile" required> 

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="password" id="password" required>

   
    <hr>
    <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>

    <button type="submit" class="registerbtn">Register</button>
  </div>
  

</form>

</body>
</html>
