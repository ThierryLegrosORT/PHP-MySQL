<?php
require_once('header.php');
require_once('menu.php');
require_once('PDOConnect.php');

$title = htmlspecialchars($_POST['nom']);

$req = $bdd->prepare('DELETE FROM jeux_video WHERE nom= :title');
$req->execute(array(
    'title' => $title
));
echo 'L\'opération s\'est bien déroulée !';

require_once('footer.php');