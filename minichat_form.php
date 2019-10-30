<?php
session_start();
require_once('header.php');
require_once('menu.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta http-equiv="refresh" content="30">
    <title>Document</title>
</head>

<body>
    <div class="chatbox">

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
        <div class="formulaire_chat">
            <form action="minichat.php" method="post">
                <input type="text" name="pseudo" minlength="4" value="<?php echo $_SESSION['pseudo']; ?>" placeholder="Pseudo" size="7">
                <!-- <textarea name="message" cols="50" rows="2" minlength="3" required placeholder="Message..."></textarea> -->
                <input name="message" size="35" minlength="3" required placeholder="Message...">
                <input type="submit" value="Envoyer">
            </form>
        </div>
    </div>
</body>

</html>

<?php
require_once('footer.php');
