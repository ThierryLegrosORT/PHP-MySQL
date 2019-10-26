<?php
require_once('header.php');
require_once('menu.php');
require_once('PDOConnect.php');

// $req = $bdd->prepare('SELECT nom, prix FROM jeux_video WHERE possesseur = ? AND prix <= ?');
// $req->execute(array($_POST['possesseur'], $_POST['prix_max']));
$req = $bdd->prepare('SELECT nom, prix FROM jeux_video WHERE possesseur = :possesseur AND prix <= :prixmax');
$req->execute(array('possesseur'=>$_POST['possesseur'], 'prixmax'=>$_POST['prix_max']));

echo 'Résultat pour ' . $_POST['possesseur'] . ' avec un prix max de ' . $_POST['prix_max'] . ' EUR.';
echo '<ul>';
while($data = $req->fetch()){
    echo '<li>' . $data['nom'] . ' (' . $data['prix'] . ' EUR)</li>';
}
echo '</ul>';

require_once('footer.php');
$req->closeCursor();