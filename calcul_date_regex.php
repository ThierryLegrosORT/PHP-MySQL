<?php
require_once('header.php');
require_once('menu.php');

$date = $_POST['date'];
echo $date;
if (isset($date)) {
    $date = DateTime::createFromFormat('Y-m-d', $date);
    $date = date_format($date, 'd/m/Y');
    $annee = preg_replace("#^([0-9]{2}/){2}([0-9]{4})$#", '$2', $date);
    echo "<br>Année renseignée: " . $annee;
} else {
    echo "Pas de date";
}
// header("Location: /regex_part2.php");
?>
<br><br>
<a href="javascript:history.back()">Page Précédente</a>
<br><br>
<?php
require_once('footer.php');
