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
    <form action="update_req.php" method="post">
        <label for="title">Titre à modifier: </label>
        <input type="text" name="title"><br>
        <label for="possesseur">Possesseur: </label>
        <input type="text" name="possesseur"><br>
        <label for="prix">Prix: </label>
        <input type="number" name="prix"><br>
        <input type="submit" value="Envoyer">

    </form>
</body>
</html>

<?php
require_once('footer.php');