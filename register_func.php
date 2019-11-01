<?php
require_once('PDOConnect.php');
// Déclarations des variables
$password = htmlspecialchars($_POST['password']);
$pseudo = htmlspecialchars($_POST['pseudo']);
$email = htmlspecialchars($_POST['email']);


// Vérification des informations
// $response = $bdd->prepare('SELECT pseudo, email FROM users');

// $response->closeCursor();

// Hachage du password
$password = password_hash($password, PASSWORD_DEFAULT);

// Insert en BDD
$insert_req = $bdd->prepare('INSERT INTO users(password, pseudo, email, subscribe_date) VALUES(:password, :pseudo, :email, NOW())');
$insert_req->execute(array(
    'password' => $password,
    'pseudo' => $pseudo,
    'email' => $email
));
$insert_req->closeCursor();

header('Location: register_valid.php');
