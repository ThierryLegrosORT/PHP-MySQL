<?php
require_once('PDOConnect.php');

$pseudo = htmlspecialchars($_POST['pseudo']);
$message = htmlspecialchars($_POST['message']);

$req = $bdd->prepare('INSERT INTO minichat(pseudo, message) VALUES(:pseudo, :message)');
$req->execute(array(
    'pseudo' => $pseudo,
    'message' => $message
));
$req->closeCursor();

header('Location: minichat_form.php');