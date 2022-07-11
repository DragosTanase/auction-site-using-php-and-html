
<?php 
session_start();

if ((isset($_SESSION['email']) && $_SESSION['email'] == true)) {
   
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
    <title>Despre noi</title>
</head>
<body>
    <p>Suntem o companie ce liciteaza case. CEO Dragos Tanase.</p>
<?php require_once 'logout.php' ?>
<?php require_once 'navbar.php'?>

</body>
</html>