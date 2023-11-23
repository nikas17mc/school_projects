<html>
    <body>
<?php

$preis= 1.35;
$liter1=16;
$liter2=23;
$liter3=34;
$gesamtzahlung = ($liter1 + $liter2 + $liter3) * $preis;
echo "Mit Klammern: $gesamtzahlung <br/>";
$gesamtzahlung_1 = $liter1 + $liter2 + $liter3 * $preis;

echo "Ohne Klammern: $gesamtzahlung_1"
?>
    </body>
</html>