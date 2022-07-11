<?php
require_once('adminpage.php');


 if (isset($_POST["submit"])) {
     if ($_POST["email"] == "boss@admin.com" &&
        $_POST["password"]== "boss1234"
     ) {
         session_start();
        
         $_SESSION["is_logged_in"] = true;
         header("Location: ./users.php");
         exit();
     }
     header("Location: ./adminpage.php");
     exit();
 }
?>
