<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="if_html.php" method="post">
        <input type="text" name="preis" id=""><br>
        <input type="submit" value="Daten senden">
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST"):
        $preis = $_POST["preis"];
        if($preis < 1):
    ?>
        <p>Der Preis liegt unter 1 &euro;</p>
        <p>Das ist günstig!</p>
    <?php else: ?>
        <p>Der Preis liegt bei 1 &euro; oder darüber</p>
        <p>Langsam wird es teuer</p>
    <?php endif; ?>
    <?php endif; ?>
</body>
</html>