<?php
require_once('header.php');
require_once('menu.php');
require_once('PDOConnect.php');

$possesseur = htmlspecialchars($_POST['possesseur']);
$prix = $_POST['prix'];
$nom_jeu = htmlspecialchars($_POST['title']);

$req = $bdd->prepare('UPDATE jeux_video SET possesseur = :possesseur, prix = :nvprix WHERE nom = :nom_jeu');
$req->execute(array(
	'possesseur' => $possesseur,
	'nvprix' => $prix,
	'nom_jeu' => $nom_jeu
    ));
    echo 'La mise à jour de l\'entrée ' . $nom_jeu . ' s\'est bien déroulée.';

require_once('footer.php');