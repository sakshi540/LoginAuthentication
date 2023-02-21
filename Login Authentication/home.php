<?php 
//database connection 
$host = "localhost";
$user = "root";
$pass = "";
$dbname= "Login_authn";
$conn = mysqli_connect($host, $user,$pass, $dbname);



// login code 

// login ckeck
session_start();

 if($_SESSION['is_login']){
  $rEmail = $_SESSION['rEmail'];
}else{
  echo "<script> location.href='index.php'; </script>";
}
//user name
 if($_SESSION['is_login']){
  $rEmail = $_SESSION['rEmail'];
}else{
  echo "<script> location.href='index.php'; </script>";
}
 $sql = "SELECT  db_name, db_user, db_email, db_phone, db_pass FROM users WHERE db_email = '$rEmail'";

 $result = $conn->query($sql);
 if ($result->num_rows == 1) {
    $row = $result->fetch_assoc();
    $rName = $row['db_name'];
    $rUser = $row['db_user'];
    $rEmail = $row['db_email'];
    $rContact = $row['db_phone'];
    $rPass = $row['db_pass'];
 }
 ?>

 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
 </head>
 <body>
    hello <?php echo $rName ?> .


    <a class="nav-link" href="logout.php"><i class="fa fa-power-off " style="font-size: 17px;"></i> Logout</a>

     
</body>
 </html>