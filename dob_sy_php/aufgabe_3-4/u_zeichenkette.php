<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $artikel1 = 22.50;
        $artikel2 = 12.30; 
        $artikel3 = 5.20;
        // Schreibe alle Artikeln auf

        $umsatzsteuer = 0.19; // Ändere den Wert auf 0.19 für 19% Umsatzsteuer
        $netto = $artikel1 + $artikel2 + $artikel3; // Setze den Nettopreis
        $brutto = ($netto * $umsatzsteuer) + $netto; // Rechne den Brutto

        echo "Artikel 1: $artikel1 Euro<br/>
                Artikel 2: $artikel2 Euro<br/>
                Artikel 3: $artikel3 Euro<br/><br/>
                Nettosumme: $netto Euro<br/>
                Umsatzsteuer: " . ($umsatzsteuer * 100) . " %<br/> 
                Bruttosumme: $brutto Euro<br/>";
                /* Schreibe alle Artikeln und die Rechnungen 
                auf mit dem richtiger Schreibweise für Umsatzsteuer */
    ?>
</body>
</html>