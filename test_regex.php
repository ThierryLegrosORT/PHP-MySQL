<?php
require_once('header.php');
require_once('menu.php');
// if(preg_match("#^[0-9]{2}/[0-9]{2}/[0-9]{2}[0-9]{2}$#", "01/01/1999")){
if (preg_match("#^([0-9]{2}/){2}[1-2]{1}[9,0]{1}[0-9]{2}$#", "01/01/2099")) {
    // if(preg_match("#^[0-3]{1}[0-9]{1}/[0-1]{1}[0-9]{1}/[19-20]{1}[00-99]{1}$#", "01/01/1999")){
    echo 'Vrai';
} else {
    echo 'Faux';
}

$annee = preg_replace("#^([0-9]{2}/){2}([1-2]{1}[9,0]{1}[0-9]{2})$#", '$2', "01/01/2099");
echo "<br>An: " . $annee;
?>
<br><br>
<a href="javascript:history.back()">Page Précédente</a>

<?php
require_once('footer.php');