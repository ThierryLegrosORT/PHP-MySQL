<?php

$ageDuVisiteur = 12;
$prix = 25.5;
$texte = "Bonjour !";
$estCeVrai = true;
$quantite = 10;

echo 'Le visiteur a '.$ageDuVisiteur.' ans...<br/>';

$total = $prix*$quantite;

echo 'Le prix total est de '.$total.'euro<br/>';
if($estCeVrai){
 echo "Vrai !";
}else{
    echo "Faux !";
}
echo "<br/>";
echo "<br/>";

if($ageDuVisiteur<=13){
echo "Salut petit ! Sois le bienvenue sur ce site !<br/>";
$autorisation = "oui";
}else{
    echo "T'es trop vieux poulet ! Tu regardes encore Dora ? :D<br/>";
$autorisation = "non";
}
echo "Avez-vous l'autorisation ? $autorisation";



?>