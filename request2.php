<?php
require_once('PDOConnect.php');

// $response = $bdd->query('SELECT nom, id FROM jeux_video');

// while($data = $response->fetch()){
//     echo $data['id'] . '- ' .$data['nom'] . '<br>';
// }

// $response->closeCursor();

$response = $bdd->query('SELECT nom, prix, possesseur FROM jeux_video WHERE possesseur=\'Patrick\' ORDER BY prix');
while($data = $response->fetch()){
    echo '<strong>' . $data['nom'] . '</strong> appartient à <strong>' . $data['possesseur'] . '</strong> et coûte ' . $data['prix'] . ' euro(s).<br><br>';
}

$response->closeCursor();