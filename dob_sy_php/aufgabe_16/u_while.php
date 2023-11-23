<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border="1">
        <thead>
            <th>Spieler 1</th>  
            <th>Spieler 2</th>  
        </thead>
        <tbody>
        <?php
            srand((double)microtime()*1000000);
            $spieler1 = 0;
            $spieler2 = 0;

            while($spiler1 < 25 && $spieler2 < 25){
                $wurf1 = rand(1,10);
                $wurf2 = rand(1,10);

                $spieler1 += $wurf1;
                $spieler2 += $wurf2; 
                
                echo "<tr><th>{$spieler1}</th><th>{$spieler2}</th></tr>";
            }
        ?>
        </tbody>
    </table>
    <?php
        if ($spieler1 >= 30 && $spieler2 >= 30) {
            echo "Unentschieden!";
        } elseif ($spieler1 >= 25) {
            echo "Spieler 1 hat gewonnen!";
        } else {
            echo "Spieler 2 hat gewonnen!";
        }
    ?>
</body>
</html>