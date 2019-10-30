<?php
header ("Content-type: image/jpeg");
$image = imagecreatefromjpeg("images/6410.jpg");
imagejpeg($image);
?>