<?php
require_once('header.php');
require_once('menu.php');
require_once('PDOConnect.php');

$pseudo = htmlspecialchars($_POST['pseudo']);
$message = htmlspecialchars($_POST['message']);

$req = $bdd->prepare('INSERT INTO minichat(pseudo, message) VALUES(:pseudo, :message)');
$req->execute(array(
    'pseudo' => $pseudo,
    'message' => $message
));

header('Location: minichat_form.php');


require_once('footer.php');