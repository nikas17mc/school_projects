<?php
$angaben = (int)$_POST["gro"];
$gewicht = (int)$_POST["gew"];
$gender = $_POST["gen"];
$normal = $angaben - 100;
$situation = array("Sehr gut", "Zu gut", "Okay", "Nicht gut", "Sehr Schlecht");

function situ($x)
{
    global $situation;
    $i = $situation[$x];
    return $i;
};

if ($gender == "male") {
    $ideal = $normal - 10 / 100 * $normal;
    $gender = "Male";
} elseif ($gender == "female") {
    $ideal = $normal - 15 / 100 * $normal;
    $gender = "Female";
};

$GU = $gewicht - $ideal;
if ($GU >= 20) {
    $i = situ(4);
    $c = "r";
} elseif ($GU >= 10) {
    $i = situ(3);
    $c = "or";
} elseif ($GU >= 0) {
    $i = situ(2);
    $c = "y";
} elseif ($GU >= -10) {
    $i = situ(1);
    $c = "o";
} else {
    $i = situ(0);
    $c = "s";
};

// echo var_dump($ideal) . " ideal<br/>";
// echo var_dump($angaben) . " angabe<br/>";
// echo var_dump($gewicht) . " gewicht<br/>";

$i1 = "<p>Ihr Geschlecht: " . $gender . "</p>";
$i1 .= "<p>Ihre Körpergröße: " . $angaben . " cm</p>";
$i1 .= "<p>Ihr Gewicht: " . $gewicht . " kg</p>";
$i2 = "<p>Normalgewicht: " . $normal . " kg</p>";
$i2 .= "<p>Idealgewicht: " . $ideal . " kg</p>";

// Lebenserwartung und Gefährdung hinzufügen
if ($GU >= 20) {
    $lebenserwartung = "Höchste Lebenserwartung bis " . ($ideal + 10) . " kg";
    $gefaehrdung = "Ihr Gewicht ist <span class=\"".$c."\">".$i."</span> - viel zu erhöhte Gefährdung!";
} elseif ($GU >= 10) {
    $lebenserwartung = "Höchste Lebenserwartung bis " . ($ideal + 10) . " kg";
    $gefaehrdung = "Ihr Gewicht ist <span class=\"".$c."\">".$i."</span> - erhöhte Gefährdung!";
} elseif ($GU >= 0) {
    $lebenserwartung = "Höchste Lebenserwartung bis " . ($ideal + 10) . " kg";
    $gefaehrdung = "Ihr Gewicht ist <span class=\"".$c."\">".$i."</span> - keine Gefährdung!";
} elseif ($GU >= -10) {
    $lebenserwartung = "Höchste Lebenserwartung bis " . ($ideal - 10) . " kg";
    $gefaehrdung = "Ihr Gewicht ist <span class=\"".$c."\">".$i."</span> - Lebenserwartung ist gut!";
} else {
    $lebenserwartung = "Höchste Lebenserwartung bis " . ($ideal - 10) . " kg";
    $gefaehrdung = "Ihr Gewicht ist <span class=\"".$c."\">".$i."</span> - Lebenserwartung ist hoch!";
};

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .s{
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            font-size: 0.8rem;
            color:black;
            background: rgba(177, 225, 115, 0.501);
        }
        .o{
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            font-size: 0.8rem;
            color:black;
            background: rgba(185, 242, 52, 0.501);
        }
        .y{
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            font-size: 0.8rem;
            color:black;
            background: rgba(242, 223, 52, 0.501);
        }
        .or{
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            font-size: 0.8rem;
            color:black;
            background: rgba(242, 160, 52, 0.501);
        }
        .r{
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            font-size: 0.8rem;
            color:black;
            background: rgba(246, 70, 70, 0.501);
        }
    </style>
</head>
<body>
    <?php
    echo "<h3>Ausgabe Ihrer Berechnung</h3>";
    echo $i1 . $i2;
    echo "<p>$lebenserwartung</p>";
    echo "<p>$gefaehrdung</p>";
    ?>
</body>
</html>
