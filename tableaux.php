<?php

$noms = array("Thierry", "Fanny","Léa");
$personne = array("nom" => "Nebra",
 "prenom" => "Bob",
  "age" => 99);

echo "<br>";

print_r($personne); // affiche le contenu du tableau

// affiche le contenu de arry noms via boucle for == limite est de connaitre le nombre d'entrées du tableau
for($numero = 0; $numero<3; $numero++){
    echo "<p>" . $noms[$numero] . "</p>";
}

echo "<br>";

// meme chose qu'au dessus, mais sans avoir besoin de connaitre la longueur du tableau
foreach($noms as $nom){
    echo "<p>" . $nom . "</p>";
}

echo "<br>";

// meme chose sur le tableau personne
foreach($personne as $detail){
    echo "<p>" . $detail . "</p>";
}

echo "<br>";

// methode permettant de recuperer le libelle de la valeur affichée
foreach($personne as $libelle => $detail){
    echo "<p>" . $libelle . " vaut " . $detail . "</p>";
}

echo "<br>";

?>