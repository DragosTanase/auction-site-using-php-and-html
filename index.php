
<?php 
session_start();
require_once ('connection.php');
require_once ('upload.php');

if ((isset($_SESSION['email']) && $_SESSION['id'] == true)) {
    

  
    ?>
<form method ="POST" action="./logout.php">
   
    <input type="submit" name="logout" value ="logout">
    
       
    </form>
    
    <?php
    


} 



?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Liciteaza-ti casa!</title>
</head>
<body>
    <?php require_once 'navbar.php' ?>
    <?php require_once 'connection.php'?>
    <?php require_once 'logout.php'?>
    
</body>
</html>