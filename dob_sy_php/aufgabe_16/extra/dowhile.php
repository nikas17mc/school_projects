<?php
srand((double)microtime()*100000);

$summe = 0;

do{

$zufallszahl = rand(1,6);

$summe = $summe + $zufallszahl;

echo "Zahl $zufallszahl, Summe $summe<br />";
}

while ($summe < 25);

?>