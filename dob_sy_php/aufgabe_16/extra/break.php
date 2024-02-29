<?php

srand((double)microtime()*100000);
$zaehler = 0;
$summe = 0;

while($summe < 25){
    $zufallszahl = rand(1,6);
    $summe += $zufallszahl;
    $zaehler += 1;
    echo "Nr. $zaehler, Zahl $zufallszahl, Summe $summe<br/>";
    if($zahler >= 6){break;};
}