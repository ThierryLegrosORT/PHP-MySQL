<?php
require_once('header.php');
require_once('menu.php');
require_once('PDOConnect.php');
?>
<form action="" method="post">
    <label for="pseudo">Pseudo: </label>
    <input type="text" name="pseudo"><br>
    <label for="password">Mot de passe: </label>
    <input type="password" name="password"><br>
    <label for="confirm">Confirmation du mot de passe: </label>
    <input type="password" name="confirm"><br>
    <label for="email">Adresse email valide: </label>
    <input type="email" name="email">
</form>


<?php
require_once('footer.php');