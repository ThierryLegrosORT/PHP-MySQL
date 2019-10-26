<?php
/*
NE PAS AJOUTER CE FICHIER DANS LE REPO SI IL CONTIENT DE VRAIS IDENTIFIANTS
*/
try{ // on teste la présence d'erreur
    // $bdd = new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'root', ''); // exemple de connexion avec l'objet PDO (ici pour une connexion locale à mysql, sans mot de passe)
    $bdd = new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION)); //activation des erreurs à la connexion pour afficher un detail sur l'erreur
}
catch (Exception $e){ // si une erreur est détectée, le message suivant est affiché
    die('Erreur: ' . $e->getMessage());
}
?>