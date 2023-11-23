<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
// Normalgewicht berechnen
$koerpergroesse=180.0;

$normalgewicht=$koerpergroesse-100.0;


//Idealgewicht berechnen
$idealgewicht_m=$normalgewicht-10.0/100.0*$normalgewicht;



//Ausgabe der Ergebnisse im Browser
echo "<b>Ergebnisse der Broca-Formel für einen 180 cm großen Mann</b><br/><br/>";
echo "Normalgewicht: $normalgewicht kg <br/>";
echo "Idealgewicht: $idealgewicht_m kg";
?>    
</body>
</html>