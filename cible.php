<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
    <p>Bonjour !</p>
    
    <p>Pseudo choisi: <strong><?php echo htmlspecialchars($_POST['pseudo']); ?></strong></p> 
    <p>Vous êtes 
        <?php
        if(isset($_POST['gamer'])) {
            echo "Gamer<br />";
        }else{
            echo "non Gamer<br />";
        }

        echo "et vous êtes un" . $_POST['sexe'] . ".";
        echo "Vous habitez en " . $_POST['pays'] . "<br />";
        echo "Vous êtes né le: " . $_POST['birthday'];
        ?>
        </p><br />
    <p>Pour choisir un autre pseudo, retourner sur <a href="transmettredata.php">cette page</a>. </p>
    <input type="submit" value="Valider"><br />
    <p>Ce bouton ne fonctionne pas, il est juste pour l'exemple.</p>
    <p>Utiliser htmlspecialchars() pour empêcher l'utilisation de balises dans le formulaire !!!</p>
    <p>revenir lire "l'envoie de fichiers via des formulaires" <a href="https://openclassrooms.com/fr/courses/918836-concevez-votre-site-web-avec-php-et-mysql/913099-transmettez-des-donnees-avec-les-formulaires#/id/r-913098" target="_blank">ici...</a> </p>

</body>
</html>