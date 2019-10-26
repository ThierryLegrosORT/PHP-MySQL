<?php
require_once('header.php');
require_once('menu.php');
require_once('PDOConnect.php');

$nom = $_POST['nom'];
$possesseur = $_POST['possesseur'];
$console = $_POST['console'];
$prix = $_POST['prix'];
$nbre_joueurs_max = $_POST['nbre_joueurs_max'];
$commentaires = $_POST['commentaires'];

$req = $bdd->prepare('INSERT INTO jeux_video(nom, possesseur, console, prix, nbre_joueurs_max, commentaires) VALUES(:nom, :possesseur, :console, :prix, :nbre_joueurs_max, :commentaires)');
$req->execute(array(
    'nom'=> $nom,
    'possesseur'=> $possesseur,
    'console'=> $console,
    'prix'=> $prix,
    'nbre_joueurs_max'=> $nbre_joueurs_max,
    'commentaires'=> $commentaires
));
echo 'L\'ajout a bien été effectué !';

require_once('footer.php');