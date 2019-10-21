<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Variables superglobales</title>
</head>

<body>
    <?php
    require_once("header.php");
    require_once("menu.php");
    ?>
    <p>Une variable superglobale se différencie par le '_' en début et son nom en MAJUSCULES.<br />
        ex: $_GET, $_POST, $_FILES, etc... </p>
    <p>Pour afficher son contenu, on peut utiliser le code suivant:<br />
        <textarea rows="6" cols="35">
        <pre>
            &lt;?php
            print_r($_GET);
            ?&gt;
        </pre>
        </textarea><br />
        Ce qui donnera un retour de type:<br />
        <pre>
            <?php
            print_r($_GET);
            ?>
        </pre>
    </p>
    <p>
        Voici une liste non exaustive des variables superglobales:
        <li class="superglobales">$_SERVER</li>Ce sont des valeurs renvoyées par le serveur. Elles sont nombreuses et quelques-unes d'entre elles peuvent nous être d'une grande utilité. Je vous propose de retenir au moins $_SERVER['REMOTE_ADDR']. Elle nous donne l'adresse IP du client qui a demandé à voir la page, ce qui peut être utile pour l'identifier.
        <li class="superglobales">$_ENV</li>Ce sont des variables d'environnement toujours données par le serveur. C'est le plus souvent sous des serveurs Linux que l'on retrouve des informations dans cette superglobale. Généralement, on ne trouvera rien de bien utile là-dedans pour notre site web.
        <li class="superglobales">$_SESSION</li>On y retrouve les variables de session. Ce sont des variables qui restent stockées sur le serveur le temps de la présence d'un visiteur. Nous allons apprendre à nous en servir dans ce chapitre.
        <li class="superglobales">$_COOKIE</li>Contient les valeurs des cookies enregistrés sur l'ordinateur du visiteur. Cela nous permet de stocker des informations sur l'ordinateur du visiteur pendant plusieurs mois, pour se souvenir de son nom par exemple.
        <li class="superglobales">$_GET</li>Contient les données envoyées en paramètres dans l'URL.
        <li class="superglobales">$_POST</li>Contient les informations qui viennent d'être envoyées par un formulaire.
        <li class="superglobales">$_FILES</li>Contient la liste des fichiers qui ont été envoyés via le formulaire précédent.
    </p>
    <p>source: Open ClassRoom</p>

</body>

</html>
<?php
require('footer.php');