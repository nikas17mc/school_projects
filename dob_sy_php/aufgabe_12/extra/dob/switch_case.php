<?php
if($_SERVER["Request"] == "POST"){
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