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
    $sorte = $_POST["sorte"];



    if($sorte == "N"){
        echo "$_POST[angabe] Liter Normal kostet ".$_POST["angabe"] * $preisN." &euro;";
    }else if($sorte == "S"){
        echo "$_POST[angabe] Liter Super kostet ".$_POST["angabe"] * $preisS." &euro;";
    }else{
        echo "Sie dürfen nur s (Super) oder n (Normal) wählen! Andere Wahlen sind ungültig.";
    };
    
    ?>
</body>
</html>





