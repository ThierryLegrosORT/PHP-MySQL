<?php
require('header.php');
require('menu.php');
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
    <h2>Persistance des données sans BDD, avec CHMOD</h2>
    <p>Lire le <a href="https://openclassrooms.com/fr/courses/918836-concevez-votre-site-web-avec-php-et-mysql/913492-lisez-et-ecrivez-dans-un-fichier" target="_blank">chapitre</a> à ce sujet.</p>
    <?php
    $monfichier = fopen('compteur.txt', 'r+'); // j'ouvre le fichier en lecture/ecriture

    $view_page = fgets($monfichier); // on lit le contenu de la 1ere ligne
    $view_page +=1; // on incrémente de 1
    fseek($monfichier, 0); // on se place en 1ere position de la ligne
    fputs($monfichier, $view_page); // on re-ecrit par dessus la ligne avec la nouvelle valeur

    fclose($monfichier);
    echo "<p>Cette page a été vue " . $view_page . " fois.</p>";
    ?>
    <table>
        <tr>
            <td>Mode</td>
            <td>Explication</td>
        </tr>
        <tr>
            <td>r</td>
            <td>Ouvre le fichier en lecture seule. Cela signifie que vous pourrez seulement lire le fichier.</td>
        </tr>
        <tr>
            <td>r+</td>
            <td>Ouvre le fichier en lecture et écriture. Vous pourrez non seulement lire le fichier, mais aussi y écrire (on l'utilisera assez souvent en pratique).</td>
        </tr>
        <tr>
            <td>a</td>
            <td>Ouvre le fichier en écriture seule. Mais il y a un avantage : si le fichier n'existe pas, il est automatiquement créé.</td>
        </tr>
        <tr>
            <td>a+</td>
            <td>Ouvre le fichier en lecture et écriture. Si le fichier & n'existe pas, il est créé automatiquement. Attention : le répertoire doit avoir un CHMOD à 777 dans ce cas ! À noter que si le fichier existe déjà, le texte sera rajouté à la fin.</td>
        </tr>
    </table>
</body>

</html>