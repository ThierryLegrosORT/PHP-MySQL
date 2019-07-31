<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
    require_once("header.php");
    require_once("menu.php");

echo "transmettre des données de page en page:<br><br>";

echo "Transmettre des données avec l'URL:<br>";

?>
<p>
   
    <a href="bonjour.php?nom=Nebra&amp;prenom=Mathieu&amp;repeter=1">Dis-moi bonjour</a>
</p>


    <?php require_once("footer.php"); ?>
</body>
</html>