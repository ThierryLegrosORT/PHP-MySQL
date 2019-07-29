<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Page de test</title>
</head>

<body>
    <h2>Page de test</h2>

    <p>Cette page contient du code HTML avec des balises PHP.<br />
        <?php echo "Bonjour !"; ?>
        Voici quelques petits tests:
    </p>
    <?php echo "NB: cette ligne est écrite \"uniquement\" en <strong>PHP</strong>." ?>

    <ul>
        <li style="color: blue">Texte en bleu</li>
        <li style="color: red">Texte en rouge</li>
        <li style="color: green">Texte en vert</li>
    </ul>

<p>Aujourd'hui nous sommes le <?php echo date("d/m/y"); ?> et il est: <?php echo date("H:i:s"); ?></p>

<!-- <?php
phpinfo();
?> -->

</body>

</html>