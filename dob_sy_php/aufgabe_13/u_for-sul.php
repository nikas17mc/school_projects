<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Styled Document</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
        }

        div {
            background-color: #3498db;
            color: #ecf0f1;
            padding: 10px;
            margin: 10px;
            border-radius: 5px;
            font-size: 14px;
            line-height: 1.5;
        }

        div.break {
            display: block;
            width: 100%;
            clear: both;
        }

        div.special {
            background-color: #27ae60;
        }

        div:nth-child(odd) {
            transform: rotate(3deg);
        }

        div:nth-child(even) {
            transform: rotate(-3deg);
        }

        div.animated {
            animation: pulse 0.8s infinite alternate;
        }

        @keyframes pulse {
            from {
                transform: scale(1);
            }
            to {
                transform: scale(1.05);
            }
        }
    </style>
</head>
<body>
    <?php
    for ($a = 13; $a < 30; $a = $a + 4) {
        echo "<div>$a</div>";
        if ($a == 29) {
            echo "<div class='break'></div>";
        }
    }

    for ($b = 2; $b > -1.5; $b = $b - 0.5) {
        echo "<div>$b</div>";
        if ($b == -1) {
            echo "<div class='break'></div>";
        }
    }

    for ($c = 2000; $c < 7000; $c = $c + 1000) {
        echo "<div>$c</div>";
        if ($c == 6000) {
            echo "<div class='break'></div>";
        }
    }

    for ($d = 7; $d < 15; $d = $d + 2) {
        echo "<div>Z$d</div>";
        if ($d == 13) {
            echo "<div class='break'></div>";
        }
    }

    for ($e = 1; $e < 4; $e++) {
        echo "<div>a b$e</div>";
        if ($e == 3) {
            echo "<div class='break'></div>";
        }
    }

    for ($f = 1; $f < 4; $f++) {
        $_f = 2;
        $_f1 = 3;
        if ($f == 1) {
            echo "<div class='special'>c$_f c$_f1</div>";
        } else if ($f == 2) {
            echo "<div class='special'>c" . ($_f + 10) . " c" . ($_f1 + 10) . "</div>";
        } else if ($f == 3) {
            echo "<div class='special'>c" . ($_f + 20) . " c" . ($_f1 + 20) . "</div>";
        }
        if ($f == 3) {
            echo "<div class='break'></div>";
        }
    }

    for ($g = 13; $g < 46; $g = $g + 4) {
        switch ($g) {
            case 25:
                $g = $g + 8;
                break;
        }
        echo "<div class='animated'>$g</div>";
    }
    ?>
</body>
</html>
