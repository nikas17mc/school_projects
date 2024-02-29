<?php
function bigger($a, $b) {
    if ($a > $b) {
        return $a;
    } else if ($a < $b) {
        return $b;
    }
}
echo "(3/4) ist das Maximum: " . bigger(3, 4) . "</br>";
echo "(44/22) ist das Maximum: " . bigger(44, 22) . "</br>";
echo "(0.23321/0.23023) ist das Maximum: " . bigger(0.23321, 0.23023) . "</br>";
echo "(-123/-123.1) ist das Maximum: " . bigger(-123, -123.1) . "</br>";