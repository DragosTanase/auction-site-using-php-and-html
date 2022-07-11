<?php
    
    session_start();    
    
    require_once("connection.php");
    
    $errors = 0;
    $email = 0;
        if(isset($_POST['login'])){
            $email = htmlspecialchars($email);  
            $password = htmlspecialchars($password);  
            $email = mysqli_real_escape_string($con, $_POST['email']);
            $password = mysqli_real_escape_string($con, $_POST['password']);
            
            

            if (empty($email)) {
           echo "email is required"; $errors++;
            }
            if (empty($password)) {
                 echo "Password is required"; $errors++;
            }

            if ($errors == 0) {
                $password = sha1($password);
                $query = "SELECT * FROM table_account WHERE email='$email' AND password='$password'";
               
                
                $results = mysqli_query($con, $query);
                $row=mysqli_fetch_assoc($results);
                
                
                if (mysqli_num_rows($results) == 1) {
                    $_SESSION['loggedin'] = true;
                    $_SESSION['email'] = $email;
                    $_SESSION['id']=$row['account_id'];
                    $_SESSION['mymoney']=$row['money'];
                    
                  header('location: index.php');
                }else {
                    
                    echo "Wrong.";
                }
            }
        
        }


      
       



?>  