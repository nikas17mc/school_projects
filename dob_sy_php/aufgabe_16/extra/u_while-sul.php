<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table {
            margin:4px;
            border: 2px double;
            border-radius: 11px;
            padding: 3px;
            background-color: aliceblue;
        }
        th {
            font-size: 21px;
        }
        td {
            font-size: 16px;
            font-weight: bold;
            font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
        }
        th, td {
            background-color: beige;
            border: 2px solid #6c757d;
            border-radius: 8px;
            text-align: center;
            padding:5px;
        }
        p {
            margin:4px;
            font-weight: bold;
            font-size: 16px;
            padding:5px;
            border: 1px solid #6c757d;
            border-radius: 8px;
            width: fit-content;
            background-color: beige;
        }
    </style>
</head>
<body>
    <table>
        <thead>
            <th>Runde</th>
            <th>Spieler 1</th>  
            <th>Spieler 2</th>  
        </thead>
        <tbody>
        <?php
            srand((double)microtime()*1000000);
            $spieler1 = 0;
            $spieler2 = 0;
            $runde = 1;
            while($spieler1 < 25 && $spieler2 < 25){
                $wurf1 = rand(1,6);
                $wurf2 = rand(1,6);

                $spieler1 += $wurf1;
                $spieler2 += $wurf2; 
                
                echo "<tr>
                        <td>Runde: ".$runde."</td>
                        <td>{$spieler1}</td>
                        <td>{$spieler2}</td>
                    </tr>";
                    $runde++;
            }
        ?>
        </tbody>
    </table>
    <?php
    if ($spieler1 > $spieler2) {
        echo "<p>Spieler 1 gewinnt</p>";
    } else if ($spieler1 < $spieler2){
        echo "<p>Spieler 2 gewinnt</p>";
    }else {
        echo "<p>Unentschieden!</p>";
    }
    ?>
</body>
</html>