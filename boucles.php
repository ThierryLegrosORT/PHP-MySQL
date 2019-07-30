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

    $repetitions = 0;

    while ($repetitions < 10) {
        echo "<p>" . $repetitions . " Je ne dois pas copier sur mon voisin</p>";
        $repetitions++;
    }

    echo "<br><br>";

    for ($repetitions = 1; $repetitions <= 10; $repetitions++) {
        echo "<p>" . $repetitions . " Je ne dois pas copier sur mon voisin</p>";
    }

    ?>
<?php require_once("footer.php"); ?>
</body>

</html>