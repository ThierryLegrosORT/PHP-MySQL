<?php
// Vérification des informations
$req = $bdd->prepare('');

$req->closeCursor();
// Hachage du password
$password = $_POST['password'];
$password = password_hash($password, PASSWORD_DEFAULT);

// Insert en BDD
$insert_req = $bdd->prepare('INSERT INTO users(password, pseudo, email, subscribe_date) VALUES(:password, :pseudo, :email, NOW())');
$insert_req->execute(array(
    'password' => $password,
    'pseudo' => $pseudo,
    'email' => $email
));
$insert_req->closeCursor();

header('Location: register.php');
