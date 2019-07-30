<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<?php
require_once("header.php");
require_once("menu.php");


$noms = array("Thierry", "Fanny","Léa");
$personne = array("nom" => "Nebra",
 "prenom" => "Bob",
  "age" => 99);

echo "<br>";

echo "<pre>"; //met en forme le tableau pour une lecture simplifiée lors de l'affichage (ne pas mettre en prod)
print_r($personne); // affiche le contenu du tableau
echo "</pre>";

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

$coordonnees = array(
    "prenom" => "François",
    "nom" => "Dupond",
    "address" => "3 rue du Limogé",
    "city" => "Triffouille-les-Oies"
);

foreach($coordonnees as $element){
    echo $element . "<br>";
}

echo "<br>";

foreach($coordonnees as $cle => $element){
    echo "[" . $cle . "] vaut " . $element . "<br>";
}

echo "<br><br> Recherche dans les tableaux<br><br>array_key_exists:<br>";

if(array_key_exists("nom", $coordonnees)){
    echo "La clé 'nom' se trouve dans les coordonnées !<br>";
}

if(array_key_exists("pays", $coordonnees)){ //renvoie un booleen
    echo "La clé 'pays' se trouve dans les coordonnées !<br>";
}else{
    echo "La clé 'pays' n'existe pas dans les coordonnées...<br>";
}

echo "<br><br>in_array:<br>";

$fruits = array("Banane","Mandarine","Kiwi","Pomme","Poire","Fraise","Orange","Citron");

if(in_array("Fraise", $fruits)){ // in_array recherche dans les valeurs et fait office de booleen
    echo "La valeur 'Fraise' se trouve dans le tableau fruits.<br>";
} else{
    echo "La valeur 'Fraise' ne se trouve pas dans le tableau fruits.<br>";
}

if(in_array("Cerise", $fruits)){
    echo "La valeur 'Cerise' se trouve dans le tableau fruits.<br>";
} else{
    echo "La valeur 'Cerise' ne se trouve pas dans le tableau fruits.<br>";
}

echo "<br><br>array_search:<br><br>";

$fruits2 = array("Banane","Mandarine","Kiwi","Pomme","Poire","Fraise","Orange","Citron");

$position = array_search("Banane", $fruits2); //renvoie l'indice de la valeur recherchée dans le tableau, et agit comme un booleen
echo "'Banane' se trouve à l'indice " . $position . " dans le tableau fruits2<br><br>";

$position = array_search("Citron", $fruits2);
echo "'Citron' se trouve à l'indice " . $position . " Dans le tableau fruits2.<br>";

?>
    <?php require_once("footer.php"); ?>
    </body>
</html>