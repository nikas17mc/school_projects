<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $preis = 0.98;
    if ($preis < 1){
        echo "Der Preis liegt unter 1 &euro;<br>";
        echo "Das ist günstig.";
    }
    ?>
</body>
</html>