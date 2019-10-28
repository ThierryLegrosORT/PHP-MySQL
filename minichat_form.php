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
    <div class="chatbox">

        <div class="formulaire_chat">
            <fieldset>
                <form action="minichat.php" method="post">
                    <label for="pseudo">Votre pseudo: </label>
                    <input type="text" name="pseudo" minlength="4" required> 4 car. min.<br>
                    <label for="message">Votre message: </label>
                    <textarea name="message" cols="30" rows="4" minlength="3" required></textarea>
                    <input type="submit" value="Envoyer">
                </form>
            
            </fieldset>
        </div>
            <div class="minichat">
        <?php
        require_once('PDOConnect.php');
        $response = $bdd->query('SELECT UPPER(pseudo) AS pseudo_maj, message, DATE_FORMAT(date_ajout, "%d/%m/%y %Hh%i") as heure_ajout FROM minichat ORDER BY id DESC limit 0, 10');
        while ($data = $response->fetch()) {
            $pseudo = htmlspecialchars($data['pseudo_maj']);
            $message = htmlspecialchars($data['message']);
            $date_ajout = $data['heure_ajout'];
            ?>
            <p class="msg_box">
                <?php echo '<span class="heure">' . $date_ajout . '</span> <span class="pseudo">' . $pseudo . '</span>: ' . $message; ?><br>
            </p>
        <?php
        }
        $response->closeCursor();
        ?>
        </div>
    </div>
</body>

</html>

<?php
require_once('footer.php');
