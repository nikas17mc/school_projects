<?php
    function flexloop($a, ...$b){
        if(count($b) < 2){
            echo "<p style='font-weight:bold;font-size:16px;color:red;'>Error: Es sind nur zwei Argumente vergeben, weshalb es als Fehler angezeigt wird.";
            return;
        }
        $c = $b[1];
        echo "<p>Eine Schleife von $a bis $b[0] mit"." der Schrittweite $c"."</br>";
        for($i=$a;$i<=$b[0];$i=$i+$c){
            echo "$i\n";
        }
    }
$x=100;$y=200;$z=10;

echo "<p>Nummer 1: ";flexloop(5,27,3); // prints numbers from 5 to 27 with a step of 3
echo "<p>Nummer 2: ";flexloop(-10,10,4); // prints numbers from -10 to 10 with a step of 4
echo "<p>Nummer 3: ";flexloop($x,$y,$z); // prints numbers from 100 to 200 with a step of 1
echo "<p>Nummer 4: ";flexloop($x,$y,($y-$x)/8);
echo "<p>Nummer 5: ";flexloop(9,16); // here we have only two arguments so the error message should appear.