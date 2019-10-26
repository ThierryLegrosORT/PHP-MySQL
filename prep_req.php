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
    require_once('header.php');
    require_once('menu.php');
    ?>
    <br>
<form action="prepared_request.php" method="post">
    <label for="possesseur">Nom: </label>
    <input type="text" name="possesseur"><br>
    <label for="prix_max">Prix Max. </label>
    <input type="number" name="prix_max">
    <input type="submit" value="valider">
</form>

</body>
</html>