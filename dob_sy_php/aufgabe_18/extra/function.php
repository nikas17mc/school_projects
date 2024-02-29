<?php
function breaker($sZ){
    for ($i = 0; $i <= $sZ; $i++) {
        echo "-";
    }
}
echo "<p>Dies ist ein Programm,</p>" . breaker(40);
echo "<p>in dem mehrmals</p>" . breaker(40);
echo "<p>eine Funktion verwendet wird,</p>" . breaker(40);
echo "<p>die zu Beginn defeniert wurde.</p>" . breaker(40);
breaker(40);