<?php
require_once('connection.php');
require_once('authentication.php');


?>
<a href="./index.php">Acasa</a>
<?php

$sql = "SELECT house_id, address, number_of_rooms, space, house_price, house_image FROM table_houses ORDER BY house_id";

$result = mysqli_query($con, $sql);



while($row=mysqli_fetch_array($result))
{
 
    echo '<br>';
    $image_src = $row['house_image'];
   
    echo 'Adresa: '; echo $row['address']."<br>";
    echo 'Numar camere: '; echo $row['number_of_rooms']."<br>"; 
    echo 'Metri patrati: ';echo $row['space']."<br>"; 
    echo 'Pret de plecare: '; echo $row['house_price']."<br>"."<br>"; 

    ?> 

<img src='<?php echo $image_src; ?>' width="300px" height="300px"; >


<?php
  

?>

<br>
<br>
    <a href="./introdupretlicitare.php"><button>Vrei sa licitezi?</button></a>
<br>
<?php 


} 






?>