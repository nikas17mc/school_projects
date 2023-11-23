<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        *{
            background-color:green;
        }

        :root{
            --blue:blue;
            --red:red;
        }
        .paragraph{
            color:var(--red);
            background-color:black;
            padding:2px;
            border: black 1px solid;
            margin: 2px;
            width: 
        }
        .paragraph2{
            color:var(--red);
            background-color: 
        }

        .eingabe{
            color:var(--blue)
        }
    </style>
</head>
<body>
    <?php
    //Nikolai Kovalev 21.08.-

    $name=$_POST["vor"]." ".$_POST["nach"]; 
    $adress=$_POST["street"]." <br/> ".$_POST["plz"]. " <br/>" .$_POST["ort"];
    echo "<p class=\"paragraph\">Guten Tag,"." "."<span class=\"eingabe\">".$name."</span></p>"."<p class=\"paragraph2\">Deine Adresse lautet:</p>"."<span class=\"eingabe\">".$adress."</span";


    
    ?>
</body>
</html>