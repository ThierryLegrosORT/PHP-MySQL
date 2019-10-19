<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>NASA access</title>
</head>

<body>
    <?php
    require("header.php");
    require("menu.php");
    ?>

    <br />
    <fieldset>
        <form action="validate.php" method="post">
            <?php


            echo "Hello User.<br />Please enter password to access asked page: "; ?>
            <input type="password" name="pass" id="pass">
            <input type="submit" value="Send">
        </form>
    </fieldset>

</body>

</html>