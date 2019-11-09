<?php
session_start();
require_once('PDOConnect.php');

// $pseudo = htmlspecialchars($_POST['pseudo']);
$pseudo = $_SESSION['pseudo'];
$message = htmlspecialchars($_POST['comment']);
$billet = $_GET['billet'];

$req = $bdd->prepare('INSERT INTO blog_comment(id_billet, author, content, date_ajout) VALUES(:billet, :pseudo, :content, NOW())');
$req->execute(array(
    'billet' => $billet,
    'pseudo' => $pseudo,
    'content' => $message
));
$req->closeCursor();
header('Location: blog_comment.php?billet=' . $billet);
