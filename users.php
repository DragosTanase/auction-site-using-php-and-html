<?php
require_once('connection.php');

session_start();


if(isset($_SESSION["is_logged_in"])==true) {
    
?>
    <form method ="POST" action="./logout.php">
   
   <input type="submit" name="logout" value ="logout">
   
      
   </form>
   
   

<?php

$sql = "SELECT name,email,money FROM table_account ORDER BY account_id";


$result = mysqli_query($con, $sql);

while($row=mysqli_fetch_array($result)){
    echo "EMAIL: "; echo $row['email'];
    echo '<br>';
    echo '<br>';
    echo "NUME: "; echo $row['name'];
    echo '<br>';
    echo '<br>';
    echo "VALUTA: "; echo $row['money'];
    echo '<br>';
    echo '<br>';
}

?>
    <p>Introdu email-ul pe care vrei sa il stergi: </p>
    <form action="./stergeuser.php" method="POST">
        <input type="email" name="insertEmail">
        <input type="submit" name="trimite" value="Trimite">
    </form>
    
<?php
  
}else{
    echo 'Nu ai access.';
    exit();
}




?>