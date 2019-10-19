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

    echo "transmettre des données de page en page:<br><br>";

    echo "Transmettre des données avec l'URL:<br>";

    echo '<p>   
            <a href="bonjour.php?nom=Nebra&amp;prenom=Mathieu&amp;repeter=1" target="_blank">Dis-moi bonjour</a>
        </p><br />';

    echo "Transmettre des données avec les formulaires:<br>";
    ?>

    <div>
        <fieldset>
            <form action="cible.php" method="post">
                <p>
                    <label>Pseudo:
                        <input type="text" name="pseudo" id="pseudo" placeholder="Entrez votre pseudo..." required>
                    </label>
                    Votre pays:
                    <select name="pays">
                        <option value="France">France</option>
                        <option value="Espagne">Espagne</option>
                        <option value="Ireland">Ireland</option>
                    </select>
                    <input type="date" name="birthday" max="<?php date("d/m/y"); ?> " required>
                    <br />
                    <label>Gamer:
                        <input type="checkbox" name="gamer" id="gamer"><br />
                    </label>
                    <input type="radio" name="sexe" id="homme" value=" homme" checked>
                    <label for="homme">Homme</label>
                    <input type="radio" name="sexe" id="femme" value="e femme">
                    <label for="femme">Femme</label><br />
                    <label for="message">Votre message: </label>
                    <textarea name="message" id="message" cols="30" rows="10">Entrez votre message ici</textarea><br />
                    <p>Pour envoyer un document, veuillez cliquer <a href="./send_files.php" target="_blank">ici.</a></p>

                    <input type="submit" value="Envoyer">
                </p>
            </form>
        </fieldset>
    </div>
    <p>revenir lire <a href="https://openclassrooms.com/fr/courses/918836-concevez-votre-site-web-avec-php-et-mysql/913099-transmettez-des-donnees-avec-les-formulaires#/id/r-913098" target="_blank">"l'envoie de fichiers via des formulaires"</a> </p>

    <?php require_once("footer.php"); ?>
</body>

</html>