<?php
$host = "localhost";
$user = "root";
$pass = "";
$dbname= "Login_authn";
$conn = mysqli_connect($host, $user,$pass, $dbname);
if (!$conn){
	echo "database conntection successsfully ";
}

if(isset($_REQUEST['rSignup'])){
	$sql = " SELECT db_email FROM users WHERE db_email = '".$_REQUEST['rEmail'] ."'";
	$result = mysqli_query($conn,$sql);
	if(mysqli_num_rows($result) == 1){
    echo'<script>
        alert("Hello! already exit Email..!!");
      </script>';
        //$msg1 = '<div class="alert alert-danger mt-2" role="alert">already exit Email</div>';
	}
	else{
		$name = $_REQUEST['rName'];
		$user = $_REQUEST['rUser'];
		$email = $_REQUEST['rEmail'];
		$phone = $_REQUEST['rPhone'];
		$pass = $_REQUEST['rPass'];

		
		$sql = " INSERT INTO `users`(`db_name`,`db_user`,`db_email`,`db_phone`, `db_pass`) 
		VALUES('$name','$user','$email','$phone','$pass')";
		if($conn->query($sql)== true){
      
      echo' <script>
        alert("Hello! Account created successfully.. !!");
      </script>';
     
			// $msg1 = '<div class="alert alert-success mt-2" role="alert"> account created successfully </div>';
		}
	else{
		echo'</script>alert("Server down")</script>';
	}
	}
}


?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link  rel="stylesheet"  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <link rel="stylesheet" href="style.css" />
    <title>Sign Up Form</title>
  </head>
  <body>
    <div class="container">
      <div class="card">
        <div class="btn-group">
          <div id="signin-btn" class="btn signin-btn">Sign In</div>
        <div id="signup-btn" class="btn">Sign Up</div>
      </div>
        <!-- Sign In Form -->
        <form action="login.php" method="post" id="login-form" >
          
          <h2>Sign In</h2>
          <div class="form-group">
            <span>Email</span>
            <input type="email" placeholder="Enter email" name="rEmail" required />
          </div>
          <div class="form-group">
            <span>Password</span>
            <input type="password" placeholder="Enter password" name="rPassword" required />
          </div>          
          <div class="button">
            <input type="submit" value="Login" />
          </div>
          <br><?php if(isset($msg)) echo $msg; ?>
          
          
        </form>
        <!-- Sign Up Form -->
        <form action="index.php" method="post" id="signup-form" >
          <h2>Registration</h2>
          <div class="form-group">
            <span>Name</span>
            <input type="text" placeholder="Enter name" name="rName" value="" required />
          </div>
          <div class="form-group">
            <span>Username</span>
            <input type="text" placeholder="Enter username" name="rUser" value="" required />
          </div>
          <div class="form-group">
            <span>Email</span>
            <input type="email" placeholder="Enter email" name="rEmail" required />
          </div>
          <div class="form-group">
            <span>Phone Number </span>
            <input type="text" placeholder="0123-45-6789" pattern="[0-9]{4}-[0-9]{2}-[0-9]{4}" name="rPhone" required/>
            <small>Format: 782-104-0312</small>
          </div>
          
          <div class="form-group">
            <span>Confirm Password</span>
            <input type="password" placeholder="Enter confirm password" name="rPass" required />
          </div>
          <div class="button" href="home.html">
          <input type="submit" name = "rSignup" value=" Register"/>
      
          </div>
          
         
        </form>
      </div>
      </div>
      <script
      src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
      integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    ></script>
    <script>
      function myalert() {
          alert("You have successfully register!");
      }
  </script>
    <script>
      const signupForm = document.getElementById("signup-form");
      const signinForm = document.getElementById("login-form");
      // form validation with the help of javascript
      signupForm.addEventListener("submit", (e) => {
        if (signupForm.checkValidity() === false) {
          e.preventDefault();
          e.stopPropagation();
          signupForm.classList.add("was-validated");
          return false;
        }
      });
      signinForm.addEventListener("submit", (e) => {
        if (signinForm.checkValidity() === false) {
          e.preventDefault();
          e.stopPropagation();
          signinForm.classList.add("was-validated");
          return false;
        }
      });
    </script>
    <script>
      const btnBg1 = document.getElementById("signup-btn");
      const btnBg2 = document.getElementById("signin-btn");
      $(document).ready(function () {
        $("#signup-btn").click(function () {
          $("#signup-form").slideUp();
          $("#login-form").slideDown();
          btnBg1.classList.add("signup-btn");
          btnBg2.classList.remove("signin-btn");
        });
        $("#signin-btn").click(function () {
          $("#login-form").slideUp();
          $("#signup-form").slideDown();
          btnBg2.classList.add("signin-btn");
          btnBg1.classList.remove("signup-btn");
        });
      });
    </script>
  </body>
</html>