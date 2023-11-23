<?php

// Größe des Bildes
$width = 400;
$height = 400;

// Erstellen eines leeren Bildes
$image = imagecreatetruecolor($width, $height);

// Hintergrundfarbe festlegen (weiß)
$background = imagecolorallocate($image, 255, 0, 0);
// Linienfarbe festlegen (schwarz)
$white = imagecolorallocate($image, 255, 255, 255);
$black = imagecolorallocate($image, 0, 0, 0);

// Die lineare Gleichung: y = mx + b
$m = -3; // Steigung
$b = 4; // y-Achsenabschnitt

// Zeichnen der x- und y-Achsen
imageline($image, 0, $height / 2, $width, $height / 2, $white); // x-Achse
imageline($image, $width / 2, 0, $width / 2, $height, $white); // y-Achse

// Zeichnen der linearen Funktion
for ($x = -($width / 2); $x < ($width / 2); $x++) {
    $y = $m * $x + $b;
    imagesetpixel($image, $width / 2 + $x, $height / 2 - $y, $white);
}

// Header für das PNG-Bild setzen
header("Content-type: image/png");

// Das Bild im PNG-Format ausgeben
imagepng($image);

// Bildressource freigeben
//imagedestroy($image);
?>