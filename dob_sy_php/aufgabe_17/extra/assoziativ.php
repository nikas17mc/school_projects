<?php
$teMP = array("Montag" => 17.5, "Dienstag" => 19.2, "Mittwoch" => 21.8, "Donnerstag" => 21.6, "Freitag" => 17.5, "Samstag" => 20.2, "Sonntag" => 16.6);
$summe = 0;
echo "<p>" . $teMP["Montag"] . "</p><table border='2px'><thead><tr><th>Wochentag</th><th>Temperatur</th></tr></thead>";
foreach ($teMP as $day => $temperatur) {
    echo "<tr><td>".$day."</td><td style='text-align:right;'>".$temperatur."</td></tr>";
    $summe = $summe + $temperatur;
}
echo "</table><p>Summe: ".$summe."</p>";