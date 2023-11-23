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
    $preisd = 1.10;

    switch ($_POST["sorte"]) {
        case "N":
            $zahlung = $_POST["volume"] * $preisn;
            echo $_POST["volume"] . " L Normal kosten $zahlung &euro;";
            break;
        case "S":
            $zahlung = $_POST["volume"] * $preiss;
            echo $_POST["volume"] . " L Super kosten $zahlung &euro;";
            break;
        case "D":
            $zahlung = $_POST["volume"] * $preisd;
            echo $_POST["volume"] . " L Diesel kosten $zahlung &euro;";
            break;
        default:
            echo "Falsche Eingabe";
            break;
    }


    ?>
</body>

</html>