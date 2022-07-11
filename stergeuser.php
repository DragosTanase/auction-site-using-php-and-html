<?php
require_once('connection.php');

$sql = "SELECT name,email,money FROM table_account ORDER BY account_id";


$result = mysqli_query($con, $sql);

if(isset($_POST['trimite'])){
   $userSters = $_POST['insertEmail'];
    while($row=mysqli_fetch_array($result)){
        if(isset($userSters)==$row['email']){
            echo "Ai sters cu succes user-ul ce avea emailul: $userSters";
            $query = "DELETE FROM table_account WHERE `email`='$userSters'";
            mysqli_query($con,$query);
            break;
        }
    }   
    
}


?>