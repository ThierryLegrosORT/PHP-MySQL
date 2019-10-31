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
    <title>Expressions régulières part.1</title>
</head>

<body>
    <h3>Expressions régulières - part.I</h3>
    <ul>
        <li><b>preg_grep()</b></li>
        <li><b>preg_split()</b></li>
        <li><b>preg_quote()</b></li>
        <li><b>preg_match()</b></li>
        <li><b>preg_match_all()</b></li>
        <li><b>preg_replace()</b></li>
        <li><b>preg_replace_callback()</b></li>
    </ul>
    <p>
        <h4>preg_match()</h4>
        <pre>
        &lt;?php
        if(preg_match("#guitare#", "J'aime la guitare")){
            echo 'Vrai';
        } else {
            echo 'Faux';
        }
    </pre>
    </p>
    <p>
        Permet de rechercher le mot "guitare" dans la chaine de caractère qui suit, et renvoie vrai ou faux selon la présence du mot cible. Cette fonction est case-sensitive<br>
        A l'aide de symboles, il est possible d'affiner la recherche:
        <ul>
            <li><b>#guitare#i</b></li> permet de rechercher le mot quelque soit la casse <em>(guitare, GUITARE, GuitAre, ... retournent vrai.)</em>
            <li><b>#guitare|piano#</b></li> permet de rechercher guitare OU piano
            <li><b>#^guitare#</b></li> vérifie que le mot se trouve en début de chaine
            <li><b>#guitare$#</b></li> vérifie que le mot est à la toute fin de la chaine. Si on ajoute un "." après l'expression dans la chaine, la recherche échoue.<br>
            <em>J'aime la guitare.</em> renverra faux.
            <li><b>#guit[au]re#</b></li> accepte les caractères a ou u dans la recherche, ainsi guitare et guiture retournent vrai.
            <li><b>#guit[^au]re</b></li> est le symbole de négation, on retourne faux pour guitare, guiture, mais guitore ou guittre retournent vrai.
            <li>#guit(a)*re</li> est un quantificateur, il permet de retourner vrai si le "a" entre parenthèses est présent 0 ou n fois. <em>"guitre", "guitare" ou "guitaaaare" retournent vrai</em><br>
            <u>Il existe d'autres quantificateurs:</u>
            <li>+</li> qui compte si le terme est présent 1 ou plusieurs fois
            <li>?</li> correspond à 0 ou 1, ainsi #guita?re# retournera vrai si on écrit "guitare" ou "guitre"
            <li>#guita(re){3}#</li> retournera vrai uniquement pour "guitarerere" (3x (re))<br>
            {3, 5} indique vrai pour une répétition de 3 à 5 fois, et {3,} pour 3 et plus.
        </ul>
    </p>
</body>

</html>



<?php
require_once('footer.php');
