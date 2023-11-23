<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
if (isset($_POST['w1']) && isset($_POST['w2'])) {
    $erg = $_POST["w1"] + $_POST["w2"];
    echo "Die Summe von ".$_POST["w1"]." und ".$_POST["w2"]." ist $erg";
} else {
    echo "Bitte füllen Sie beide Felder aus und senden Sie das Formular erneut.";
}
echo var_dump($_POST);
?>

</body>
</html>