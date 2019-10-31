<?php
header("Content-type: image/png");
$image = imagecreate(200, 50); // Creation de l'image

// Declarations des couleurs utilisables
$orange = imagecolorallocate($image, 255, 128, 0);
$bleu = imagecolorallocate($image, 0, 0, 255);
$bleuclair = imagecolorallocate($image, 156, 227, 254);
$noir = imagecolorallocate($image, 0, 0, 0);
$blanc = imagecolorallocate($image, 255, 255, 255);

$textImage = "Salut les Zer0s !"; // Déclaration du texte à inscrire dans l'image créée

imagestring($image, 4, 35, 15, $textImage, $bleuclair); // Insère le texte $textImage taille de police 4 (1-5) a la position 35-15 et de couleur $bleuclair

// Dessiner par pixel
imagesetpixel($image, 31, 22, $noir);
imagesetpixel($image, 32, 22, $noir);
imagesetpixel($image, 33, 22, $noir);

// Dessiner par trait
imageline($image, 30, 30, 120, 120, $bleu);

// Dessiner une elipse
imageellipse($image, 100, 10, 100, 50, $noir);

imagecolortransparent($image, $orange);
imagepng($image);