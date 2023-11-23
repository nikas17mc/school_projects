<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $bestellung = $_POST["bes"];
        $versand = 4;
        if($bestellung >= 50){
            $text = "Da Sie mehr als 50€ angekauft haben, bekommen Sie es ohne Versandkosten!";
        }else{
            $summe = $bestellung + $versand;
            $text = "Da Sie unter 50€ eingekauft haben, also $bestellung €, müssen wir Ihnen einen Versandkosten eingeben von $versand €. <br> Das heißt das Sie $summe € bezahlen müssen.";
        }
        echo $text;
    ?>  
</body>
</html>