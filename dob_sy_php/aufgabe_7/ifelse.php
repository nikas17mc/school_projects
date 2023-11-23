<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $preis = 1.02;
    if ($preis < 1){
        echo "Der Preis liegt unter 1 &euro;";
        echo "Das ist günstig.";
    } else {
        echo "Der Preis liegt bei 1 &euro; oder darüber<br/>";
        echo "Langsam wird es teuer";
    }
    ?>
</body>
</html>