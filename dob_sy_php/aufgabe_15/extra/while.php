<?php
    srand((double)microtime()*1000000);  // Seed random number generator with current time.
    $summe=0;
    while($summe < 25){
        $zufallszahl = rand(1,6);   // Generate a random number between 1 and 6.
        $summe = $summe + $zufallszahl;
        echo "Zahl: $zufallszahl, Summe: $summe<br>";
    }