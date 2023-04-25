<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Numeros random utiizando looping while</title>
</head>
<body>
    <?php
        echo "<h1>NUMEROS RANDOM - LOOPING WHILE</h1>";
        $numero = 0;
        $contador = 0;
        while($contador < 6)
        {
            $numero = rand(1,1021); // comando rand gera numeros aleatorios no range que recebe no parametro
            echo "Contador: ".$contador."| ".$numero."<br>";
            $contador++; // a cada vez que passa, soma +1
        }
        echo "<h1>fim do loop<em> while<em></h1>"
    ?>
</body>
</html>