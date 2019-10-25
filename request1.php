<?php
require_once('PDOConnect.php');

$response = $bdd->query('SELECT * FROM jeux_video');
$data = $response->fetch();

while($data = $response->fetch()){
    ?>
    <p>
        <strong>Jeu:</strong> <?php echo $data['nom']; ?><br>
        Le possesseur de ce jeu est: <?php echo $data['possesseur']; ?>, et il le vend à <?php echo $data['prix']; ?> euro. <br>
        Ce jeu fonctionne sur <?php echo $data['console']; ?> et on peut y jouer à <?php echo $data['nbre_joueurs_max']; ?> au maximum. <br>
        <?php echo $data['possesseur']; ?> a laissé ces commentaires sur <?php echo $data['nom']; ?> : <em><?php echo $data['commentaires']; ?></em>
    </p>
    <?php
}

$response->closeCursor(); // termine la requete et la clos. Evite les problemes à la requete suivante