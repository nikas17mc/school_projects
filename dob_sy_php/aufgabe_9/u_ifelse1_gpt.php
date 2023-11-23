<!DOCTYPE html>
<html>
<head>
    <title>Tankstellen-Preisrechner</title>
</head>
<body>
    <h1>Tankstellen-Preisrechner</h1>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $menge = $_POST["menge"];
        $sorte = $_POST["sorte"];
        $preis_pro_liter = 0;

        if ($sorte == "N") {
            $preis_pro_liter = 1.35;
            $sorte_text = "Normal";
        } elseif ($sorte == "S") {
            $preis_pro_liter = 1.40;
            $sorte_text = "Super";
        } elseif ($sorte == "D") {
            $preis_pro_liter = 1.10;
            $sorte_text = "Diesel";
        } else {
            $sorte_text = "Unbekannt";
        }

        $gesamtpreis = $menge * $preis_pro_liter;

        // Überprüfen, ob der Kunde 100 Liter oder mehr getankt hat
        if ($menge >= 100) {
            $rabatt = $gesamtpreis * 0.02;
            $gesamtpreis -= $rabatt;
        } else {
            $rabatt = 0;
        }

        echo "Menge: " . $menge . " Liter<br>";
        echo "Sorte: " . $sorte_text . "<br>";
        echo "Preis pro Liter: " . number_format($preis_pro_liter, 2) . " €<br>";
        echo "Gesamtpreis vor Rabatt: " . number_format($gesamtpreis + $rabatt, 2) . " €<br>";
        echo "Rabatt: " . number_format($rabatt, 2) . " €<br>";
        echo "Gesamtpreis nach Rabatt: " . number_format($gesamtpreis, 2) . " €<br>";
    }
    ?>
    <a href="u_ifelse1_gpt.html">Zurück zur Eingabe</a>
</body>
</html>
