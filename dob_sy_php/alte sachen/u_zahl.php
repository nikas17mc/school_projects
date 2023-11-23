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
    $artikel1= 22.50;
    $artikel2= 12.30; 
    $artikel3= 5.20; 
    $umsatzsteuer= 1.19;
    $bruttopreis = ($artikel1 * $umsatzsteuer) + ($artikel2 * $umsatzsteuer) + ($artikel3 * $umsatzsteuer);
    echo "<p>$bruttopreis</p>"
    ?>
</body>
</html>