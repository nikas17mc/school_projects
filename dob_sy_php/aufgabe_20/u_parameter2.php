<?php
function make_it_square($x){
    $r = pow($x,2);
    return $r;
}
echo "<p>Der Quadrat von 3 ist " . make_it_square(3) .
    "<p>Der Quadrat von 3.2 ist " . make_it_square(3.2) .
    "<p>Der Quadrat von -5 ist " . make_it_square(-5) .
    "<p>Der Quadrat von 83373 ist " . make_it_square(83373);