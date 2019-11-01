<?php
$pseudo = htmlspecialchars($_POST['pseudo']);
$password = htmlspecialchars($_POST['password']);

require_once('PDOConnect.php');

// On récupère le membre dans la BDD
$verify = $bdd->prepare('SELECT id, password FROM users WHERE pseudo = :pseudo');
$verify->execute(array(
    'pseudo' => $pseudo
));

$result = $verify->fetch();

// On compare le pass envoyé avec celui de la bdd
$isCorrect = password_verify($password, $result['id']);