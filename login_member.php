<?php
require_once('header.php');
require_once('menu.php');
?>
<div class="login_zone">
    <form action="login_func.php" method="post">
        <label for="pseudo">Pseudo: </label>
        <input type="text" name="pseudo"><br>
        <label for="password">Mot de passe: </label>
        <input type="password" name="password"><br>
        <label for="autoconnect">Se connecter automatiquement: </label>
        <input type="checkbox" name="autoconnect"><br>
        <input type="submit" value="Envoyer">
    </form>
</div>


<?php
require_once('footer.php');