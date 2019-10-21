<?php
session_start();
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
    <?php
    require('header.php');
    require('menu.php');
    ?>
    <fieldset>
        <form action="sessions_cookies.php" method="post">

            <label for="name">Prénom: </label>
            <input type="text" name="name">
            <label for="age">Age: </label>
            <input type="number" name="age">
            <label for="pseudo">Pseudo: </label>
            <input type="text" name="pseudo">
            <input type="submit" value="Envoyer">
        </form>
    </fieldset>
</body>
</html>
<?php
require('footer.php');