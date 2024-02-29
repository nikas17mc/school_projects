<?php
function vl($a, $b) {
    $s = $a + $b;
    return $s;
}
function re(&$a, &$b) {
    echo "a: $a b: $b";
    $s = $a * $b;
    return $s;
}
echo "Die Summe von 7 und 5 ist " . vl(7, 5) . "</br>";
$x = 7;
$y = 5;
echo "Das Produkt von 7 und 5 ist " . re($x, $y);