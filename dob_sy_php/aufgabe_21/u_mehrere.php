<?php
function arithMit(...$zahlen) {
    if (count($zahlen) === 0) {
        echo "<em style='color:red;font-size:16px;font-weight:bold;'>Nichts wurde vergeben, warum :(</em>";
        return;
    }
    $summe = array_sum($zahlen);
    $anzahl = count($zahlen);
    $mittelwert = $summe / $anzahl;
    return $mittelwert;
}
echo "<p>Der Mittelwert von 4, 7 und 6 ist " . arithMit(4, 7, 6) . "</p>";
echo "<p>Der Mittelwert von 44, 67.5 und 1 ist " . arithMit(44, 67.5, 1) . "</p>";
echo "<p>Der Mittelwert von -5, 0 und -13 ist " . arithMit(-5, 0, -13) . "</p>";
echo "<p>Der Mittelwert von 0.001, 0.0081 und 0.0032 ist " . arithMit(0.001, 0.0081, 0.0032) . "</p>";
echo "<p>Der Mittelwert von 5, 8 und 2 ist " . arithMit(5, 8, 2) . "</p>";
echo "<p>Der Mittelwert von ..., ... und  ... ist ???" . arithMit() . "</p>";