<?php
try{ // on teste la présence d'erreur
    $bdd = new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'root', ''); // exemple de connexion avec l'objet PDO (ici pour une connexion locale à mysql, sans mot de passe)
    echo "connexion reussie !";
}
catch (Exception $e){ // si une erreur est détectée, le message suivant est affiché
    die('Erreur: ' . $e->getMessage());
}
