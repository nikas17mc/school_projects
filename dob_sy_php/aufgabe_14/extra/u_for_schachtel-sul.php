<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        * {
            margin: 0;
            padding: 0;
        }

        body {
            background-color: #393939;
            font-family: Arial, Helvetica, sans-serif;
            font-size: 20px;
            color: whitesmoke;
            width: 100vw;
            height: 100vh;
        }

        .main {
            width: 100%;
            height: 100%;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        .flex_box {
            display: flex;
        }

        .color_box {
            display: inline-flex;
            justify-content: center;
            align-items: center;
            width: 40px;
            height: 30px;
            margin: 3px;
            padding: 5px;
            text-align: center;
            border-radius: 8px;
        }
    </style>
</head>

<body>
    <div class="main">
        <?php
        for ($i = 1; $i <= 10; $i++) {
            echo "<div class=\"flex_box\">";
            for ($j = 1; $j <= 10; $j++) {
                echo "<div class=\"color_box\">" . $i * $j . "</div> ";
            }
            echo "</div>";
        }
        ?>
    </div>

<script defer>
    const color_box = document.querySelectorAll('.color_box');
    color_box.forEach(e => {
        e.style.color = randomColor();
    });

    function randomColor() {
        let index = "123456789ABCDEF";
        let color = '#';
        for (let i = 1; i <= 6; i++) {
            color += index[Math.floor(Math.random() * 15)]
        }
        return color;
    }
</script>
</body>
</html>