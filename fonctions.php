<?php

$phrase = "Bonjour je suis une phrase... et je fais parti d'un paragraphe!";
$nombreDeCara = strlen($phrase); //retourne le nombre de caracteres present dans la chaine

echo 'Fonctions:<br><br>"$strlen()" :<br>';
echo "Il y a " . $nombreDeCara . " caractères dans cettes phrase.<br><br>";

$phraseMelangee = str_shuffle($phrase); //Melange les cara dans la chaine
echo "str_shuffle():<br>Bonjour je suis une phrase... et je fais parti d'un paragraphe!<br>
et maintenant la même avec str_shuffle() :<br>" . $phraseMelangee . "<br><br>";
// On peut faire un raccourci: echo str_shuffle($phrase);
// autre façon: echo str_shuffle("Ma phrase xxxxxx");

echo "date(): <br>et passer les param.<br>";
echo date("d") . " pour date('d') qui indique le num du jour dans le mois.<br>";
echo date("y") . " pour date('y') qui indique les 2 derniers digit de l'année en cours.<br>";
echo date("Y") . " pour date('Y') qui indique l'année en cours.<br><br>";

//Fonctions perso
echo "Fonctions personnalisées:<br><br>";

function direBonjour($nom){
    echo "Bonjour " . $nom;
}
direBonjour("Thierry");

echo "<br><br>D'autres fonctions existent déjà. Aller voir sur <a href='https://www.php.net/manual/fr/funcref.php' target='_blank'>ce site</a> pour une liste détaillée.<br><br>";

echo "Exemple:<br><br>str_replace() :<br>";
echo "bim bam boum<br>" . str_replace("b", "p", "bim bam boum") . "<br>on a remplacé les b par des p";

echo "<br><br>on trouve beaucoup de fonctions existantes utiles:<br>strtolower();<br>date() avec les param:<br>
H = heure<br>
i = minute<br>
d = jour (n°)<br>
m = mois<br>
y = année (2 digits)<br>
Y = année complète<br>...<br>";
$jour = date('d');
$mois = date('m');
$annee = date('Y');

$heure = date('H');
$minute = date('i');

// Maintenant on peut afficher ce qu'on a recueilli
echo 'Bonjour ! Nous sommes le ' . $jour . '/' . $mois . '/' . $annee . ' et il est ' . $heure. ' h ' . $minute;

echo "<br><br>Voir les fonctions session_start() et setcookie()<br>qui envoient des header toutes seules...";
?>