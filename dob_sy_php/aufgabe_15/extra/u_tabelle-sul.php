<?php
echo "<table border=\"2px\">";
for ($i = 1; $i <= 10; $i++) {
    echo "<tr>";
    for ($j = 1; $j <= 10; $j++) {
        echo "<td class=\"color_box\" style=\"text-align:right;\">".($i * $j)."</td>";
    }
    echo "</tr>";
}
?>
<script defer>
const color_box = document.querySelectorAll('.color_box');
    color_box.forEach(e => {
        e.style.color = randomColor();
        e.style.backgroundColor = randomColor();
    });

    function randomColor() {
        let index = "123456789ABCDEF";
        let color = '#';
        for (let i = 1; i <= 6; i++) {
            color += index[Math.floor(Math.random() * 15)];
        }
        return color;
    }
</script>