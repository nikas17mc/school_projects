<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        if($_POST["pw"] == "bingo" || $_POST["pw"] == "kuckuck"){
            echo "Zugang gestattet";
        }else{
            echo "Zugang verweigert";
        }
    ?>
</body>
</html>