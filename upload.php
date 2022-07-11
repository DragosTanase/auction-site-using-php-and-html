<?php

 require_once 'connection.php';

 if(isset($_POST['submit'])){
 
    $name = $_FILES['file']['name'];
    $target_dir = "uploads/";
    $target_file = $target_dir . basename($_FILES["file"]["name"]);
    
    $adresa=$_POST['adresa'];
    $nrcamere=$_POST['nrcamere'];
    $metripatrati=$_POST['metripatrati'];
    $pret=$_POST['pret'];
   
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
  
    
    $extensions_arr = array("jpg","jpeg","png","gif");
  
   
    if( in_array($imageFileType,$extensions_arr) ){
     
      if(move_uploaded_file($_FILES['file']['tmp_name'],$target_dir.$name)){
          
         $image_base64 = base64_encode(file_get_contents('uploads/'.$name) );
         $image = 'data:image/'.$imageFileType.';base64,'.$image_base64;
        
        $query = "INSERT INTO table_houses(`address`, `number_of_rooms`, `space`, `house_price`, `house_name`, `house_image`) VALUES('$adresa', '$nrcamere', '$metripatrati', '$pret','".$name."','".$image."')";
        mysqli_query($con, $query);

      
      }
      
    }
   

}
 
?>