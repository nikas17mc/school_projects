<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $height = (int)$_POST["height"];
    $weight = (float)$_POST["weight"];
    $gender = $_POST["gender"];

    // Broca-Formel zur Berechnung des Normalgewichts
    if ($gender == "male") {
        $normal_weight = ($height - 100) * 0.9;
    } elseif ($gender == "female") {
        $normal_weight = ($height - 100) * 0.85;
    }

    // Berechnung der Obergrenzen
    $upper_limit = $normal_weight * 1.1;
    $lower_limit = $normal_weight * 0.9;

    // Überprüfen, ob aktuelles Gewicht mehr als 20% über dem Normalgewicht liegt
    if ($weight > $upper_limit) {
        echo "<h2>Ergebnisse:</h2>";
        echo "<p>Ihr aktuelles Gewicht beträgt $weight kg.</p>";
        echo "<p>Das ideale Normalgewicht beträgt $normal_weight kg.</p>";
        echo "<p>Übergewicht von mehr als 20% des Normalgewichts ist behandlungsbedürftig.</p>";
    } else {
        echo "<h2>Ergebnisse:</h2>";
        echo "<p>Ihr aktuelles Gewicht beträgt $weight kg.</p>";
        echo "<p>Das ideale Normalgewicht beträgt $normal_weight kg.</p>";
        echo "<p>Übergewicht von nicht mehr als 20% über dem Normalgewicht ist im Normalbereich.</p>";
        echo "<p>Die Lebenserwartung ist bei Normalgewicht oder nicht mehr als 10% darüber am höchsten.</p>";
    }
}
?>
