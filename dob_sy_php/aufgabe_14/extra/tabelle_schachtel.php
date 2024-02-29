<?php
    echo "<table border=\"2px\">";
    for($i=1;$i<=6;$i++){
        echo "<tr>";
            for($j=1;$j<=5;$j++) {
                echo "<td style=\"text-align:right;\">".($i + 7)."/".$j."</td>";
            }
    }
    echo "</table";