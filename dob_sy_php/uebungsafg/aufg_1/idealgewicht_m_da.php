<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $angaben=$_POST['gro']." cm groß und das Geschlecht: ".$_POST['gen"'];
    $normal = $_POST['gro'] - 100.0;

    if($_POST['gen'] == "male"){
    $ideal = $normal - 10.0/100.0 * $normal;
    } else if($_POST['gen'] == "female"){
    $ideal = $normal - 15.0/100.0 * $normal;
    };
    echo "<p><b>Idealgewicht-Rechner</b></p>".
        "<p>Ihre Angaben:<br/>". $angaben."</p>".
        "<p>Das Idealgewicht ausgerechnet mit Broca-Formel und abgesehen von ihren Angaben soll <span>".
        $ideal." kg sein!</span></p>";
?>
</body>
</html>