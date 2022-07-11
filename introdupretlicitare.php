<?php

require_once('connection.php');
require_once('authentication.php');



if ((isset($_SESSION['email']) && $_SESSION['id'] == true)) {
    ?>
<a href="./index.php">Acasa</a>
<br>
<br>
<?php



$sql = "SELECT house_id, address, number_of_rooms, space, house_price, house_image FROM table_houses ORDER BY house_id";

$result = mysqli_query($con, $sql);





?>
    <form action="./pretplecare.php" method="POST">
        <label>Insereaza pret plecare:</label>
        <br>
        <input type="text" name="insereazaPretPlecare">
        <br>
        <label>Trimite suma licitatie:</label>
        <br>
        <input type="text" name="insereazaPretLicitatie">
        <br>
        <br>
        <input type="submit" name="submite" value ="Trimite">
        
    </form>
<?php

   

}else{
    echo 'Trebuie sa fii logat ca sa poti licita!';
    ?>
    <br>
    <a href="./index.php">Acasa</a>
    
    <?php
    exit();
}
?>

