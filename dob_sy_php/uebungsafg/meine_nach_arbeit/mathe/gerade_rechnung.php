<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$x1=$_POST["x1"];
$y1=$_POST["y1"];
$x2=$_POST["x2"];
$y2=$_POST["y2"];
// Sicherstellen, dass die POST-Daten vorhanden und numerisch sind
if (isset($x1) && isset($y1) && isset($x2) && isset($y2)) {
    // Verhindern von Division durch null und ungültigen Berechnungen
    if ($_POST["x1"] != $_POST["x2"]) {
        $m = (($y2 - $y1) / ($x2 - $x1));
        $b = $y1 - $m * $x1;
        $function = "y = ".$m."x + ".$b;

        // Hier können Sie die Funktion verwenden oder ausgeben
        echo "<h2>Die lineare Funktion lautet: " . $function."</h2>".
        "<div id=\"container\" style=\"height: 500px; width: 80%;\"></div>".
        "<br/>".
        "<p>Du wunderst dich vielleicht, wie ist das den Möglich das wir diese Formel (".$function.") "
        ."bekommen haben? Oder?</p><p>Dann schau genau hin...</p><div><p></p></div>";

        $dataPoints = array(
            array("y" => $y1, "x" => $x1),
            array("y" => $y2, "x" => $x2),
        );
    }else {
            echo "Division durch null ist nicht erlaubt.";
        }
} else {
    echo "Ungültige Eingaben.";
}
?>
<script src="https://cdn.canvasjs.com/canvasjs.min.js"></script>
<script defer>
window.onload = function () {

var chart = new CanvasJS.Chart("container", {
	title: {
		text: "Funktionsgleichung"
	},
	axisX:{
		title: "X"
	},
	axisY: {
		title: "Y"
	},
	data: [{
		markerColor: "#008000",
		type: "line",
		dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
	}]
});
chart.render();
};
</script>
</body>
</html>