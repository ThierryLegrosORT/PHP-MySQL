<?php
require_once('header.php');
require_once('menu.php');
require_once('PDOConnect.php');
?>
<form action="register_func.php" method="post" class="register_form">
    <label>Pseudo: 
        <input type="text" name="pseudo" minlength="4" required>
    </label>
    <label for="password">Mot de passe: </label>
    <input type="password" name="password" minlength="8" required>
    <label for="confirm">Confirmation du mot de passe: </label>
    <input type="password" name="confirm" minlength="8" required>
    <label for="email">Adresse email valide: </label>
    <input type="email" name="email" required>
    <input type="submit" value="Valider">
</form>

<?php
require_once('footer.php');