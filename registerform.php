

<?php 
session_start();

if ((isset($_SESSION['email']) && $_SESSION['email'] == true)) {
    
    echo 'Nu poti sa iti faci cont nou daca esti logat! Delogheaza-te!';
    

    ?>
<form method ="POST" action="./logout.php">
   
    <input type="submit" name="logout" value ="logout">
    
       
    </form>
   
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
    <title>Inregistreaza-te</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body class="registerform">

<form action="./server.php" method="post">

    <br>
    <label>Email: </label>
    <br>
    <input type="email" name="email">
    <br>
    <label>Password: </label>
    <br>
    <input type="password" name="password"> 
    <br>
    <label>Username: </label>
    <br>
    <input type="text" name="name"> 
    <br>
    <br>
    <input type="submit" name="submit" value="Inregistreaza-te">

    <p>
  		Licitezi deja? <a href="login.php">Logheaza-te</a>
  	</p>
    <p>
         <a href="index.php">Acasa</a>
    </p>
</form>
<?php require_once 'logout.php' ?>
</body>
</html>