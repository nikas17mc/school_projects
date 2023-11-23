<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $vor = $nach = $street = $plz = $ort = "";

         if ($_SERVER["REQUEST_METHOD"] == "POST") {
             $vor = test_input($_POST["vor"]);
             $nach = test_input($_POST["nach"]);
             $street = test_input($_POST["street"]);
             $plz = test_input($_POST["plz"]);
             $ort = test_input($_POST["ort"]);
         }
         function test_input($data){
             //$data = trim($data);
             //$data = htmlspecialchars($data);
             //$data = stripcslashes($data);
             return $data;
         }
    ?>

    <h2>Bitte tragen Sie Ihre Adresse ein.</h2>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"])?>" method="post">
        <p><input type="text" name="vor"> Vorname</p>
        <p><input type="text" name="nach"> Nachname</p>
        <p><input type="text" name="street"> Straße</p>
        <p><input type="text" name="plz"> Postleitzahl</p>
        <p><input type="text" name="ort"> Ort</p><br/>
        <input type="submit" value="Daten absenden">
        <input type="reset" value="Zurücksetzen">
</form>
<br/>
<h3>Ihre Eingaben</h3> 
<?php
echo "<p>Ihr Name ist <span>".$vor."</span> <span>".$nach."</span></p>
<p>Ihre Adresse <br><span>".$street."</span><br/><span>".$plz."</span><br/><span>".$ort."</span>"

?>
</body>
</html>