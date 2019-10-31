<?php
session_start();
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
    <?php
    require('header.php');
    require('menu.php');
    ?>
    <h2>Sessions</h2>
    <fieldset>
        <form action="sessions_cookies.php" method="post">

            <label for="name">Prénom: </label>
            <input type="text" name="name">
            <label for="age">Age: </label>
            <input type="number" name="age">
            <label for="pseudo">Pseudo: </label>
            <input type="text" name="pseudo">
            <input type="submit" value="Envoyer">
        </form>
    </fieldset>
    <h2>Cookies</h2>
    <p>
        setcookie() s'utilise en général avec 3 paramètres:<br />
        <li>Nom du cookie</li>
        <li>Valeur du cookie</li>
        <li>Durée de validité</li><br>
        Pour cette valeur, il faut se baser sur la fonction time(). Cette dernière renvoie le nb de secondes écoulées depuis le 01/01/1970.<br>
        Si on veut conserver le cookie durant 3 jours, indiquer time() + 3*24*3600 <br>
        Ce qui équivaut à time() pour l'heure actuelle + 3 jours x 24h x 3600 secondes. <br>
        Au bout de ce compte à rebours, le cookie sera 'périmé' et donc inutilisable. <br><br>
        <h3>Faille XSS</h3>
        Pour éviter (un minimum) le vol de cookie par un tiers, il est recommandé d'utiliser le mode httpOnly via le renseignement de paramètres complémentaires: <br>
        <strong>setcookie('nom du cookie', 'valeur du cookie', time() + durée désirée, null, null, false, true);</strong><br>
        Le paramètre TRUE active la protection httpOnly et sécurise à minima votre cookie contre l'utilisation de scripts JavaScript. <br>
        L'utilisation de <strong>htmlspecialchars</strong> reste tout de même nécessaire.
    </p>
    <p>
        <h3>Rappel:</h3>
        setcookie, tout comme session_start, est à déclarer en premier lieu, soit avant le début du code HTML. <br>
        <pre>
            ex:
            &lt;?php
                setcookie('nom', 'Your Name', time() + 3*24*3600, null, null, false, true);
            ?&gt;
            &lt;html&gt;
            &lt;body&gt;
            ...
</pre>
    </p>
    <p>
        <h3>Rappel d'un cookie</h3>
        Pour afficher un cookie, il suffit d'insérer &lt;?php echo $_COOKIE['nom']; ?&gt; à l'endroit désiré.
    </p>
</body>

</html>
<?php
require('footer.php');
