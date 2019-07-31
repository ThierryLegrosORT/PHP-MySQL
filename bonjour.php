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
    ?>

    <p>
        <?php
        if (isset($_GET['nom']) && isset($_GET['prenom']) && isset($_GET["repeter"])) {
            $nbRepetitions = (int) $_GET['repeter'];

            if ($nbRepetitions <= 10 && $nbRepetitions > 0) {

                for ($repetition = 1; $repetition <= $nbRepetitions; $repetition++) {

                    echo "Bonjour " . $_GET['nom'] . " " . $_GET['prenom'] . "<br>";
                }
            } elseif ($nbRepetitions > 10) {
                echo "Nombre de répétition max atteint (10)...";
            } elseif ($nbRepetitions < 1) {
                echo "Nombre de répétition min: 1.";
            }
        } else {
            echo "Pas de nom ou prenom défini";
        }

        ?>
    </p>
</body>

</html>