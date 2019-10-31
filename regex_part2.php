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
    <pre>
&lt;?php
if (preg_match("#^([0-9]{2}/){2}[1-2]{1}[9,0]{1}[0-9]{2}$#", "01/01/2099")) {
    echo 'Vrai';
} else {
    echo 'Faux';
}

$annee = preg_replace("#^([0-9]{2}/){2}([1-2]{1}[9,0]{1}[0-9]{2})$#", '$2', "01/01/2099");
echo "&lt;br&gt;An: " . $annee;
    </pre>
    <br><br>
    la chaine "$2" permet de rechercher dans la regex, la deuxieme occurence des '()', qui correspond ici à l'année.
    <br><br>
    <a href="/test_regex.php">Voir résultat ici</a>
    <br><br>
    <form action="/calcul_date_regex.php" method="post">
        <label for="date">Saisissez une date: </label>
        <input type="date" name="date">
        <input type="submit" value="Envoyer">
    </form>
<ul><h3>Les classes abrégées</h3>
    <li>\d</li> indique un chiffre, équivaut à [0-9]
    <li>\D</li> indique que ce n'est pas un chiffre, &quivaut à [^0-9]
    <li>\w</li> caractère alphanumérique ou tiret, équivaut à [a-zA-Z0-9_]
    <li>\W</li> indique que ce n'est pas un mot, équivaut à [^a-zA-Z0-9_]
    <li>\t</li> indique une tabulation
    <li>\n</li> indique une nouvelle ligne
    <li>\r</li> indique un retour chariot
    <li>\s</li> indique un espace blanc
    <li>\S</li> indique que ce n'est pas un espace blanc (\t \n \r)
    <li>.</li> indique n'importe quel caractère
</ul>
</body>
</html>

<?php
require_once('footer.php');
