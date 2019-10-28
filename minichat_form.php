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
    <form action="minichat.php" method="post">
        <label for="pseudo">Votre pseudo: </label>
        <input type="text" name="pseudo" minlength="4" required><br>
        <label for="message">Votre message: </label>
        <textarea name="message" cols="30" rows="4" minlength="3" required></textarea>
        <input type="submit" value="Envoyer">
    </form>

    <?php
    require_once('PDOConnect.php');
    $response = $bdd->query('SELECT UPPER(pseudo) AS pseudo_maj, message, DATE_FORMAT(date_ajout, "%d/%m/%y %Hh%i") as heure_ajout FROM minichat ORDER BY id DESC limit 0, 10');
    while ($data = $response->fetch()) {
        $pseudo = htmlspecialchars($data['pseudo_maj']);
        $message = htmlspecialchars($data['message']);
        $date_ajout = $data['heure_ajout'];
        ?>
        <div class="minichat">
        <p>
            <?php echo $date_ajout . ': <strong>' . $pseudo . '</strong>: ' . $message; ?><br>
        </p></div>
    <?php
    }
    $response->closeCursor();
    ?>
</body>

</html>

<?php
require_once('footer.php');
