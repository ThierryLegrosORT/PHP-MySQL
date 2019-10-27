<?php
require_once('header.php');
require_once('menu.php');
require_once('PDOConnect.php');

$title = htmlspecialchars($_POST['nom']);

$req = $bdd->prepare('DELETE FROM jeux_video WHERE nom= :title') or die(print_r($bdd->errorInfo())); //gestion de l'affichage d'erreur MySQL depuis PHP
$req->execute(array(
    'title' => $title
));
echo 'L\'opération s\'est bien déroulée !';

require_once('footer.php');