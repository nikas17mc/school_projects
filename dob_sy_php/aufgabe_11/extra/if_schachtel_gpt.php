<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Preisverarbeitung</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

    <div class="container">
        <?php
            // Überprüfe, ob das Formular abgesendet wurde
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                // Hole den eingegebenen Preis aus dem Formular
                $preis = floatval($_POST["preis"]);

                // Überprüfe den Preis mit if-else Bedingungen
                if ($preis < 1) {
                    echo "<p>Der Preis ist kleiner als 1.</p>";
                } elseif ($preis <= 1.2) {
                    echo "<p>Der Preis ist zwischen 1 und 1.2, einschließlich 1.2.</p>";
                } else {
                    echo "<p>Der Preis ist größer als 1.2.</p>";
                }
            } else {
                // Falls das Formular nicht abgesendet wurde, gib eine Fehlermeldung aus
                echo "<p>Fehler: Das Formular wurde nicht abgesendet.</p>";
            }
        ?>
    </div>

</body>
</html>
