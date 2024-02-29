<?php
    function maxi(...$x){
        $result = $x[0]>$x[1] ? $x[0] : $x[1];
        return $result;
    }