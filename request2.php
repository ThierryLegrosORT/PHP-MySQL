<?php
require_once('PDOConnect.php');

$response = $bdd->query('SELECT nom FROM jeux_video');

while($data = $response->fetch()){
    echo $data['nom'] . '<br>';
}

$response->closeCursor();