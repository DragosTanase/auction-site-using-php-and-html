<?php

require_once("connection.php");
session_start();    

if ((isset($_SESSION['email']) && $_SESSION['id'] == true)) {
  
?>
<form method ="POST" action="./logout.php">
<input type="submit" name="logout" value ="logout">
    </form>
   
    <?php
    
if(isset($_POST['Adauga'])){
$money2 = $_SESSION['mymoney'];     
$money = $_POST['currency'];
$newMoney = $_POST['currency'] + $money2;
$id=$_SESSION['id'];

$query = "UPDATE table_account SET money='$newMoney' WHERE account_id = '$id'";

echo "Ai adaugat cu succes $money dolari! Acum noua ta valuta este $newMoney dolari!"; 

mysqli_query($con, $query);
$_SESSION['mymoney'] = $newMoney;
?>
    <br>
<a href="./index.php">Acasa</a>

<?php


}



if(isset($_POST['Retrage'])){
   
        $money2 = $_SESSION['mymoney']; 
    
         
    $money=$_POST['currency'];
    $newMoney = $money2 - $_POST['currency'];
    $id=$_SESSION['id'];
    
    $query = "UPDATE table_account SET money='$newMoney' WHERE account_id = '$id'";


    if($newMoney<0)
        {
            echo 'Nu poti sa scoti atat de mult!';
            
            ?>
            <br>
            <a href="./index.php">Acasa</a>
            
            <?php
            exit();
            
        }else{
            
            echo "Ai retras cu succes $money dolari! Acum noua ta valuta este $newMoney dolari!"; 
            $money2=$newMoney;
    
            
            ?>
            <br>
            <a href="./index.php">Acasa</a>
            
            <?php
           
        }
    
    mysqli_query($con, $query);
    $_SESSION['mymoney'] = $newMoney;
        }

} 
    
?>