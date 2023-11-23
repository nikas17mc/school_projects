<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    for ($a = 13;$a < 30;$a=$a + 4){
        echo "$a ";
        if ($a == 29){
            echo "<br>";
        };
    };
    for ($b = 2;$b > -1.5;$b=$b - 0.5){
        echo "$b ";
        if ($b == -1){
            echo "<br>";
        };
    };
    for ($c = 2000;$c < 7000;$c=$c+1000){
        echo "$c ";
        if ($c == 6000){
            echo "<br>";
        };
    };
    for ($d = 7;$d < 15;$d=$d + 2){
        echo "Z$d ";
        if ($d == 13){
            echo "<br>";
        };
    };
    for ($e = 1;$e < 4;$e++){
        echo "a b$e ";
        if ($e == 3){
            echo "<br>";
        };
    };
    
    for ($f = 1;$f < 4;$f++){
        $_f = 2;
        $_f1 = 3;
        if ($f == 1){
            echo "c$_f c$_f1 ";
        }else if($f == 2){
            echo "c".($_f+10)." c".($_f1+10)." ";
        }else if($f == 3){
            echo "c".($_f+20)." c".($_f1+20)." ";
        };
        if ($f == 3){
            echo "<br>";
        };
    };
    for ($g = 13;$g < 46;$g=$g + 4){
        switch($g){
            case 25:
                $g=$g+8;
                break;
        }
        echo "$g ";
    }
    ?>
</body>
</html>