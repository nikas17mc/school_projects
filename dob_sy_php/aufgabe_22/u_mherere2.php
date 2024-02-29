<?php
function get_user(...$x) {
    if (count($x) < 2) {
        echo "Not enough arguments provided";
        return;
    }
    $nachname = (string) $x[0];
    $vorname = (string) $x[1];
    $a = "<td>" . $nachname . "</td><td>" . $vorname . "</td><td>" . strtolower($vorname) . "." . strtolower($nachname) . "@abteilung.phpbti.de</td>";
    return $a;
}
echo "<table border='2px'><thead><tr><th>Name</th><th>Vorname</th><th>E-Mail</th></tr></thead>";
echo "<tr>" . get_user("Fredrich", "Max") . "</tr>";
echo "<tr>" . get_user("Ahmendri", "Paul") . "</tr>";
echo "<tr>" . get_user("Stein", "Anna") . "</tr>";
echo "<tr>" . get_user("Hanegie", "Sophie") . "</tr>";