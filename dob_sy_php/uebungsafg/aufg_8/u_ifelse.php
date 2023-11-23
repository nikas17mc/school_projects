<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $preisn = 1.35;
    $preiss = 1.40;
    
    
    if ($_POST["sorte"] == "n"){
        echo "$_POST[volume] Liter Normal kostet ".$_POST["volume"] * $preisn."";
    }else if($_POST["sorte"] == "s"){
        echo "$_POST[volume] Liter Super kostet ".$_POST["volume"] * $preiss."";
    }else{
        echo "Sie dürfen nur s (Super) oder n (Normal) wählen! Andere Wahlen sind ungültig.";
    }
    ?>
</body>
</html>