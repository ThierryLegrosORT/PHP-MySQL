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
   <?php require_once("footer.php"); ?>
   </body>
</html>