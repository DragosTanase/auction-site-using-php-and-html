<?php

require_once('connection.php');
require_once('authentication.php');


$sql = "SELECT house_id,account_id, address, number_of_rooms, space, house_price, house_image FROM table_houses ORDER BY house_id";
if ((isset($_SESSION['email']) && $_SESSION['id'] == true)) {


$result = mysqli_query($con, $sql);

if(isset($_POST['submite'])){
  
    
    $valoarePretPlecare = $_POST['insereazaPretPlecare'];
    $valoarePretLicitatie = $_POST['insereazaPretLicitatie'];

    
    if($valoarePretLicitatie<$valoarePretPlecare){
        echo 'Nu poti licita o suma mai mica decat cea initiala!';
        ?>
        <br>
            <a href="./index.php">Acasa</a>
            
        <?php
        
        exit();
    }else{
        echo 'Casa pe care ai ales sa o licitezi:';
        echo '<br>';
        while($row=mysqli_fetch_array($result)){
            if($valoarePretPlecare==$row['house_price']){
                echo '<br>';
                $image_src = $row['house_image'];
                $casaID=$row['house_id'];
                $casaAccount=$row['account_id'];
                echo 'Adresa: '; echo $row['address']."<br>";
                echo 'Numar camere: '; echo $row['number_of_rooms']."<br>"; 
                echo 'Metri patrati: ';echo $row['space']."<br>"; 
                echo 'Pret de plecare: '; echo $row['house_price']."<br>"."<br>"; 
            
                ?> 
            
            <img src='<?php echo $image_src; ?>' width="300px" height="300px"; >
            
            
            <?php
            echo '<br>';
            
            if($_SESSION['mymoney']<$valoarePretLicitatie){
                $bani = $_SESSION['mymoney'];
               
                echo '<br>';
                echo 'Nu ai destula valuta in cont pentru a licita aceasta casa!';
                echo'<br>';
                echo "Valuta ta actuala este de $bani dolari!";
                ?>
                <br>
                <br>
                <a href="./licitarecase.php"><button>Intoarce-te sa licitezi!</button></a>
                <p>sau</p>
                <a href="./account.php"><button>Adauga valuta</button></a>
                <?php
                exit();
            }else{
               
                $bani = $_SESSION['mymoney'];
                $userid=$_SESSION['id'];
                
                if($casaAccount==$userid)
                {
                    echo 'Nu poti sa licitezi aceeasi casa de doua ori consecutiv! Asteapta pana altcineva liciteaza!';
                    ?>
                    <br>
                    <a href="./index.php">Acasa</a>
                    
                    <?php
                exit();    
            }
               
                $newBani = $bani - $valoarePretLicitatie;
                $query = "UPDATE table_houses SET account_id='$userid', house_price='$valoarePretLicitatie' WHERE house_id='$casaID'";
                mysqli_query($con, $query);
                $query= "UPDATE table_account SET money='$newBani' WHERE account_id='$userid'";
               
                mysqli_query($con,$query);
                $_SESSION['mymoney']=$newBani;
                
                echo '<br>';
                echo "Noul pret de plecare este $valoarePretLicitatie dolari";
                ?>
                <br>
                <a href="./licitarecase.php"><button>Intoarce-te sa licitezi!</button></a>
               <?php
                 break;
            }
       
            }
        }
        
    }
   
}
}



?>



   
