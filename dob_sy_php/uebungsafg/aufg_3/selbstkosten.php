<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
// Gegebene Werte
$verkaufspreis = 149.00; // Verkaufspreis
$liefererrabatt = 7; // Liefererrabatt in Prozent
$liefererskonto = 2; // Liefererskonto in Prozent
$bezugskosten = 7.00; // Bezugskosten
$handlungskostenzuschlag = 15; // Handlungskostenzuschlag in Prozent

// Berechnungen
$ziel_einkaufspreis = $verkaufspreis - ($verkaufspreis * ($liefererrabatt / 100));
$bar_einkaufspreis = $ziel_einkaufspreis - ($ziel_einkaufspreis * ($liefererskonto / 100));
$bezugspreis = $bar_einkaufspreis + $bezugskosten;
$selbstkosten = $bezugspreis + ($bezugspreis * ($handlungskostenzuschlag / 100));

// Ausgabe
echo "Zieleinkaufspreis: " . number_format($ziel_einkaufspreis, 2) . " €<br>";
echo "Bareinkaufspreis: " . number_format($bar_einkaufspreis, 2) . " €<br>";
echo "Bezugspreis: " . number_format($bezugspreis, 2) . " €<br>";
echo "Selbstkosten: " . number_format($selbstkosten, 2) . " €";
?>
</body>
</html>