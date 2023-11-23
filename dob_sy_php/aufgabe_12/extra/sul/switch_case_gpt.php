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
    background:url(./shell-tankstelle.jpg);
    background-position:center;
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

input[type="submit"], input[type="reset"] {
    background-color: #007BFF;
    color: #fff;
    padding: 10px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

input[type="submit"]:hover, input[type="reset"]:hover {
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
        <h4>Bitte geben Sie Menge und Sorte ein.</h4>
        <form action="switch_case_gpt.php" method="post">
            <label for="menge">Menge in Liter</label>
            <input type="text" name="menge" id="menge"><br>
            <label for="sorte">Sorte (N, S, D)</label>
            <input type="text" name="sorte" id="sorte"><br>
            <input type="submit" value="Daten senden"><input type="reset" value="Zurücksetzen">
        </form>
        <div class="result">
            <?php
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    switch($_POST["sorte"]){
                        case "N":
                            $zahlung = $_POST["menge"] * 1.35;
                            echo $_POST["menge"]
                                ." L Normal kosten $zahlung &euro;";
                            break;
                        case "S":
                            $zahlung = $_POST["menge"] * 1.4;
                            echo $_POST["menge"]
                                ." L Super kosten $zahlung &euro;";
                            break;
                        case "D":
                            $zahlung = $_POST["menge"] * 1.1;
                            echo $_POST["menge"]
                                ." L Diesel kosten $zahlung &euro;";
                            break;
                        default:
                            echo "Als Sorte nur N, S und D eingeben!";
                    }
                }
            ?>
        </div>
    </div>
</body>
</html>
