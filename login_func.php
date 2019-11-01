<?php
require_once('header.php');
require_once('menu.php');
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
$isCorrect = password_verify($password, $result['password']);

if (!$result) {
    echo "Vérifiez votre identifiant et/ou mot de passe";
} else {
    if ($isCorrect) {
        session_start();
        $_SESSION['id'] = $result['id'];
        $_SESSION['pseudo'] = $pseudo;
        echo "Vous êtes à présent connecté !";
    } else {
        echo "Vérifiez votre identifiant et/ou mot de passe";
    }
}
$verify->closeCursor();
require_once('footer.php');