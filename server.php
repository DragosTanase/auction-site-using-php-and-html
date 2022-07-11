<?php

require_once("connection.php");

$user;
$username = "";
$email    = "";
$errors = 0;



if(isset($_POST['submit'])){
  
    $username = mysqli_real_escape_string($con, $_POST['name']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $password = mysqli_real_escape_string($con, $_POST['password']);
    

    if (empty($username)) { echo "Username is required"; $errors++;}
    if (empty($email)) {echo "Email is required"; $errors++; }
    if (empty($password)) { echo "Password is required"; $errors++; }
} 

$user_check_query = "SELECT * FROM table_account WHERE email='$email' OR name='$username'";

$result = mysqli_query($con, $user_check_query);
$user = mysqli_fetch_assoc($result);

if ($user) {
    if ($user['name'] === $username) {
       echo "Deja exista acest username!"; $errors++;
    }

    if ($user['email'] === $email) {
    echo   "Deja exista acest email!"; $errors++;
    }
  }

  if ($errors == 0) {
    $password = sha1($password);

    $query = "INSERT INTO table_account (`name`, `email`, `password`) 
              VALUES('$username', '$email', '$password')";
    mysqli_query($con, $query);
   
    header('location: index.php');
    exit();
}

 
  


  mysqli_close($con);

?>