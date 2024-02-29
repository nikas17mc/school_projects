<?php
echo "<table border=\"2px\"><thead><tr><th>Name</th><th>Age</th></tr></thead>";
$nAy = array("Peter" => "35", "Markus" => "42", "Jens" => "16", "Julia" => "17", "Monika" => "42", "Gerd" => "55");
foreach ($nAy as $name => $year) {
    echo "<tr><td>$name</td><td style=\"text-align:right;\">$year</td></tr>";
}