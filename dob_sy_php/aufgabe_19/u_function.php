<?php
function name(){
    $nT = "<table border='2px'><tr><td>Dieses Programm wurde geschrieben von Nikolai Kovalev</td></tr></table>"; 
    return $nT;
}
echo "Anfang des Programms". name().  // Fehler: name ist nicht definiert.
    "Mitte des Programms". name().
    "Ende des Programms";