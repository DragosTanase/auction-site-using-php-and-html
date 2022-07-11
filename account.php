
<?php 

session_start();
require_once 'upload.php';
if ((isset($_SESSION['email']) && $_SESSION['id'] == true)) {


    ?>
<form method ="POST" action="./logout.php">
   
    <input type="submit" name="logout" value ="logout">

    </form>
    
    <?php
    
    $valutaCurenta = $_SESSION['mymoney'];
    echo "Valuta curenta: $valutaCurenta dolari";

}else{
    echo "Nu ai cont.";
    ?>
    <br>
    <a href="./index.php">Acasa</a>
    <?php
    exit();
} 

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Adauga valuta</title>
</head>
<body>
    
    <form action="./currency.php" method="POST">
    <p>Adauga Valuta</p>
    <input type="text" name="currency">
    <input type="submit" name="Adauga" value="Adauga">
    </form>

    <form action="./currency.php" method="POST">
    <p>Retrage Valuta</p>
    <input type="text" name="currency">
    <input type="submit" name="Retrage" value="Retrage">
    </form>

    
<?php 
require_once("connection.php");
 ?> 
    <br>
    <a href="./index.php">Acasa</a>
</body>
</html>