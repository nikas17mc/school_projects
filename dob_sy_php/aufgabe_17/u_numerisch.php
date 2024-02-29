<?php
$name = array("Peter", "Markus", "Jens", "Julia", "Monika", "Gerd");
$year = array("35", "42", "16", "17", "42", "55");
echo "<table border='2px'><thead><tr><th>Name</th><th>Year</th></tr></thead>";
for ($i = 0; $i <= 5; $i++) {
    echo "<tr><td>" . $name[$i] . "</td><td style='text-align:right;'>" . $year[$i] . "</td></tr>";
}