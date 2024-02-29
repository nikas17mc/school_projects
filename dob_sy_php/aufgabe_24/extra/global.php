<?php
    function gl(){
        // echo "Variable z: ".$z."</br>";
        global $x;
        $y = 35;
        $z = $x + $y;
        echo "Variable z: ".$z."</br>";
    }
    $x = 6;
    $y = 52;
    $z=$x+$y;
    gl();
    echo "Variable  z: ".$z;
