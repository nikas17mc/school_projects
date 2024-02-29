<?php
echo "<table border=\"2px\">";
for ($i = 1; $i <= 10; $i++) {
    echo "<tr>";
    for ($j = 1; $j <= 10; $j++) {
        echo "<td style=\"text-align:right;\">".($i * $j)."</td>";
    }
    echo "</tr>";
}
echo "</table>";
