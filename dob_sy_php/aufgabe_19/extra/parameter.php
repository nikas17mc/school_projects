<?php
$x = 20;
    function trennstrich($a){
        $b = "";
        for($i=0;$i<$a;$i++){
            $b .= "-"; 
        }
        return $b;
    };
echo "<p>".trennstrich($x + 10).
"<p>In diesem Programm".
"<p>".trennstrich($x * 2).
"<p>sind die Trennstriche".
"<p>".trennstrich($x).
"<p>unterschiedlich lang".
"<p>".trennstrich($x * 3);