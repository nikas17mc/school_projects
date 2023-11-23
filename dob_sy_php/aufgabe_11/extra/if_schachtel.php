<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $preis = $_POST["preis"];

        if($preis < 1){
            echo "Der Preis ligt unter 1 &euro;<br/>".
                "Das ist günstig";
        } elseif($preis <= 1.2){
            echo "Der Preis liegt zwischen 1 &euro; und 1.20 &euro;<br/>".
                "Langsam wird es teuer";
        } else{
            echo "Der Preis liegt über 1.20 &euro;<br/>".
            "Das ist viel zu teuer";
        }
    
    
    ?>
</body>
</html>