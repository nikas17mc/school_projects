<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
            background: url(./tankstelle.jpeg);
            background-position: center;
            background-size: cover;
        }

        .container {
            max-width: 400px;
            margin: 50px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h4 {
            text-align: center;
        }

        form {
            display: flex;
            flex-direction: column;
        }

        label {
            margin-bottom: 8px;
        }

        input {
            padding: 10px;
            margin-bottom: 16px;
        }
        select {
            padding: 10px;
            margin-bottom: 16px;
        }

        input[type="submit"],
        input[type="reset"] {
            background-color: #007BFF;
            color: #fff;
            padding: 10px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        input[type="submit"]:hover,
        input[type="reset"]:hover {
            background-color: #0056b3;
        }

        .result {
            margin-top: 16px;
            font-weight: bold;
        }
    </style>
</head>

<body>
    <div class="container">
        <form action="" method="post">
            <label for="menge">Menge in Liter</label>
            <input type="text" name="menge" id="menge">
            <label for="sorte">Sorten D, N und S</label>
            <select name="sorte" id="sorte">
                <option value="D">Diesel 1.1/L</option>
                <option value="N">Normal 1.3/L</option>
                <option value="S">Super 1.35/L</option>
            </select>
            <input type="submit" value="Daten senden"><input type="reset" value="Zurücksetzen">
        </form>
        <div class="result">
            <?php
            $diesel = 1.1;
            $normal = 1.3;
            $super = 1.35;
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                if ($_POST["sorte"] == "D") {
                    $summe = $diesel * $_POST["menge"];
                    echo $_POST["menge"] . " L in Diesel sind " . $summe." &euro;";
                } else if ($_POST["sorte"] == "N") {
                    $summe = $normal * $_POST["menge"];
                    echo $_POST["menge"] . " L in Normal sind " . $summe." &euro;";
                } else if ($_POST["sorte"] == "S") {
                    $summe = $super * $_POST["menge"];
                    echo $_POST["menge"] . " L in Super sind " . $summe." &euro;";
                } else {
                    echo "Falsche Angaben";
                }
            }
            ?>
        </div>
    </div>
</body>

</html>