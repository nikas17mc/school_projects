<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $preisN = 1.35;
        $preisS = 1.40;
        $rabatt = 0.02;
        $sorte = $_POST["sorte"];
        
        if ($_POST["angabe"] >= 100){
            if ($sorte == "S"){
                $sorte = "Super";
                $erg = $_POST["angabe"] * $preisS;
                $erg_rab = $erg * $rabatt;
                $erg_rab_sum = $_POST["angabe"] - $erg_rab;
            }else{
                $sorte = "Normal";
                $erg = $_POST["angabe"] * $preisN;
                $erg_rab = $erg * $rabatt;
                $erg_rab_sum = $_POST["angabe"] - $erg_rab;
            }
            echo $_POST["angabe"]." Liter ".$sorte." kostet ".$erg_rab_sum;
        }else if($sorte == "N"){
            echo "$_POST[angabe] Liter Normal kostet ".$_POST["angabe"] * $preisN." &euro;";
        }else if($sorte == "S"){
            echo "$_POST[angabe] Liter Super kostet ".$_POST["angabe"] * $preisS." &euro;";
        }else{
            echo "Sie dürfen nur s (Super) oder n (Normal) wählen! Andere Wahlen sind ungültig.";
        };
    ?>
</body>
</html>