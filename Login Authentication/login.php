<?php
$host = "localhost";
$user = "root";
$pass = "";
$dbname= "Login_authn";
$conn = mysqli_connect($host, $user,$pass, $dbname);
if (!$conn){
	echo "database conntection successsfully ";
}
//start login code
session_start();
  if(!isset($_SESSION['is_login'])){
    if(isset($_REQUEST['rEmail'])){
      $rEmail = mysqli_real_escape_string($conn, trim($_REQUEST['rEmail']));
      $rPass = mysqli_real_escape_string($conn, trim($_REQUEST['rPassword'])) ;
	$sql = "SELECT db_email, db_pass FROM  users WHERE db_email='".$rEmail."' AND db_pass='".$rPass."' limit 1";
      $result = $conn->query($sql);
      if($result->num_rows == 1){
              $_SESSION['is_login'] = true;
        $_SESSION['rEmail'] = $rEmail;
        echo "<script> location.href='home.php'; </script>";
        exit;
      }else{
        $msg = '<div class="alert alert-warning mt-2" role="alert"> Enter Valid Email and Password </div>';
      }
      }
	}else {
		echo "<script> location.href='home.php'; </script>";
	  }

      //end 
      ?>