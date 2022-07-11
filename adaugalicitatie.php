<?php
require_once ('connection.php');
require_once('authentication.php');

if ((isset($_SESSION['email']) && $_SESSION['id'] == true)) {

    ?>

    <br>
    <form action="upload.php" method="post" enctype="multipart/form-data">
        Incarca imagine:
        <input type="file" name="file">
        <br>
        <br>
        <label>Locatia casei</label>
        <br>
        <input type="text" name="adresa">
        <br>
        <label>Numar de camere</label>
        <br>
        <input type="text" name="nrcamere">
        <br>
        <label>Metri patrati</label>
        <br>
        <input type="text" name="metripatrati">
        <br>
        <label>Pret</label>
        <br>
        <input type="text" name="pret">
            <br>
            <br>
        <input type="submit" name="submit" value="Adauga"  class="button-32">
    </form>
    
    <?php
?>
<br>
<a href="./index.php">Acasa</a>
<?php
}else{
    echo 'Conecteaza-te ca sa poti sa adaugi o licitatie!';
    ?>
    <br>
    <a href="./index.php">Acasa</a>
    <?php
}


?>

<?php

?>
