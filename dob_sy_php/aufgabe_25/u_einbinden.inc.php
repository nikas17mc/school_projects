<?php
function mW(...$x) {
    if (count($x) < 2) {
        echo "Warum so wenig Eingaben gegeben, das geht gar net!!! :(";
        return false;
    }
    $mW = array_sum($x) / count($x);
    echo "<p>Der Mittelwert von gegebenen Eingaben ergibt: " . $mW . "</p>";
    maxi(...$x);
}
function maxi(...$x) {
    $max = $x[0];
    for ($i = 1; $i < count($x); $i++) {
        if ($x[$i] > $max) {
            $max = $x[$i];
        }
    }
    echo "<p>Maximaler Wert insgesamt: " . $max . "</p>";
}