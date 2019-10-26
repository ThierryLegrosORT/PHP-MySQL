<?php
require_once('header.php');
require_once('menu.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <form action="insert.php" method="post">
        <label for="nom">Titre du jeu: </label>
        <input type="text" name="nom"><br>
        <label for="possesseur">Nom possesseur: </label>
        <input type="text" name="possesseur"><br>
        <label for="console">Console: </label>
        <input type="text" name="console"><br>
        <label for="prix">Prix: </label>
        <input type="number" name="prix"><br>
        <label for="nbre_joueurs_max">Nb joueurs max: </label>
        <input type="number" name="nbre_joueurs_max"><br>
        <label for="commentaires">Commentaires: </label>
        <input type="text" name="commentaires"><br>
        <input type="submit" value="Envoyer">
    </form>
</body>

</html>
<?php

require_once('footer.php');
