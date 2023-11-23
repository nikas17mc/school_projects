<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
        $artikel1 = $_POST["netto"];

        // Schreibe alle Artikeln auf

        $umsatzsteuer = 0.19; // Ändere den Wert auf 0.19 für 19% Umsatzsteuer
        $netto = $artikel1; // Setze den Nettopreis
        $brutto = ($netto * $umsatzsteuer) + $netto; // Rechne den Brutto

        echo "Artikel 1: $artikel1 Euro<br/><br/>
                Nettosumme: $netto Euro<br/>
                Umsatzsteuer: " . ($umsatzsteuer * 100) . " %<br/> 
                Bruttosumme: $brutto Euro<br/>";
                /* Schreibe alle Artikeln und die Rechnungen 
                auf mit dem richtiger Schreibweise für Umsatzsteuer */
    ?>
</body>
</html>