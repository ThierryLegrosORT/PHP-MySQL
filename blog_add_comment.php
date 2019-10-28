<?php
require_once('PDOConnect.php');

$pseudo = htmlspecialchars($_POST['pseudo']);
$message = htmlspecialchars($_POST['comment']);

$req = $bdd->prepare('INSERT INTO blog_comment(id_billet, author, content) VALUES(:id_billet, :pseudo, :content)');
$req->execute(array(
    'id_billet' => $id_billet,
    'pseudo' => $pseudo,
    'content' => $message
));
$req->closeCursor();
header('Location: blog_comment.php');