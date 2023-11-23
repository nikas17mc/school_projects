<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aufgabe 11</title>
    <style>

    </style>
</head>
<body>
    <?php
    $name = $_POST["name"];
    $pw = $_POST["pw"];
    
    if(($name == "Marten" && $pw == "Hamburg")||($name == "Schmitz" && $pw == "Berlin")){
        echo "Zugang gestattet!";
    }else{
        echo "Zugang verweigert";
    };
    ?>
</body>
</html>