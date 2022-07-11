<?php 
session_start();
require_once ('connection.php');


if ((isset($_SESSION['email']) && $_SESSION['id'] == true)) {
    

	echo 'Esti deja logat!';
	
	?>
	<p></p>
	<a href="./index.php">Acasa</a>
	<?php
    exit();


} 



?>

<!DOCTYPE html>
<html>  
<head>
  <title>Logheaza-te</title>
  <link rel="stylesheet" href="styles.css">
</head>
<body class="registerform">

  <form method="post" action="authentication.php">
  	
  	
  		<label>Email</label>
  		<input type="email" name="email" >

  	
  		<label>Parola</label>
  		<input type="password" name="password">
  	
  	
  		<button type="submit" name="login">Login</button>
  	
  	<p>
  		Nu ai cont? <a href="registerform.php">Inregistreaza-te</a>
  	</p>

  </form>
</body>
</html>