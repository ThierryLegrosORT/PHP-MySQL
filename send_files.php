<?php
 require_once("header.php");
 require_once("menu.php");
 ?>
<form action="cible_envoi.php" method="post" enctype="multipart/form-data">
    <p>Formulaire d'envoi de fichier: </p>
    <input type="file" name="file" id="file">les extensions acceptées sont: txt, doc, docx, pdf, rtf<br />
    taille max: 5Mo<br />
    <input type="submit" value="Envoyer le fichier" />
</form>