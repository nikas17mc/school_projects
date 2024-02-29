<?php
    function addieren(){
        $anz = func_num_args();
        echo "<p>Anzahl der Werte: ".$anz."</br>Werte: ";
        $sum = 0;
        for($i=0;$i<$anz;$i++){
            $sum = $sum + func_get_arg($i);
            echo func_get_arg($i)." ";
        }
        echo "</br>Summe aller Werte: ". $sum."</p>";
    }
addieren(2,3,6);
addieren(13,26);
addieren(65,-3,88,31,12.5,7);