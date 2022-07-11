

<header>
<nav>
<ul>
    
    <li> <a href="http://localhost/Proiect Web/index.php">Acasa</a></li>
    <li> <a href="http://localhost/Proiect Web/about.php">Despre Noi</a></li>
    <li><a href="http://localhost/Proiect Web/contact.php">Contact</a></li>
    <li><a href="http://localhost/Proiect Web/registerform.php">Inregistreaza-te</a></li>
    <li><a href="http://localhost/Proiect Web/login.php">Logheaza-te</a></li>
    <li><a href="http://localhost/Proiect Web/licitarecase.php">Vezi licitatiile</a></li>
    <?php 
    

if ((isset($_SESSION['email']) && $_SESSION['id'] == true)) {

  
    ?>
    <li><a href="http://localhost/Proiect Web/account.php">Contul tau</a></li>
    <li><a href="http://localhost/Proiect Web/adaugalicitatie.php">Adauga licitatie</a></li>   
    </form>
    
    <?php
}



    ?>
</ul>
</nav>

</header>



