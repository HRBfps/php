<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>help</title>
    <style type="text/css">
        * {
            margin: 0;
            padding: 0;
            font-size: 20px;
        }
        .h1 {
            font-size: 40px;
            color:blue;
        }
        .h12 {
            font-size: 40px;
            color:red;
        }
        .sec {
            display: inline-block;
            margin-bottom: 20px;
            border: 2px solid gray;
        }
        .sec2 {
            text-align:center;
            display: block;
            margin-top: 20px;
            margin-bottom: 20px;
            border: 2px solid gray;
        }
        .body {
            display: inline-block;
            border: 2px solid black;
        }
        .btn {
            margin-left: 120px;
        }
    </style>
</head>
<body>
    <?php 
    echo "<section class=body>";
        echo "<form name = 'help' method= 'post' action='exercicio2803.php'>";
        echo "<section class='sec'>";
            echo "<h1 class='h1'>Controle de gastos</h1>";
        echo "</section>";
        echo "<section class='sec2'>";
            echo "<h1 class='h12'>Receita</h1>";
        echo "</section>";
        echo "<p>";
            echo "<label>Receita1....:";
            echo "<input type='input' name='valor1' required size='4' >";
        echo "</p>";
        echo "<p>";
            echo "<label>Receita2....:";
            echo "<input type='input' name='valor2' required size='4' >";
        echo "</p>";
        echo "<section class='sec2'>";
            echo "<h1 class='h12'>Despesas</h1>";
        echo "</section>";
        echo "<p>";
            echo "<label>Despesa1....:";
            echo "<input type='input' name='des1' required size='4' >";
        echo "</p>";
        echo "<p>";
            echo "<label>Despesa2....:";
            echo "<input type='input' name='des2' required size='4' >";
        echo "</p>";
        echo "<p>";
            echo "<label>Despesa3....:";
            echo "<input type='input' name='des3' required size='4' >";
        echo "</p>";
        echo "<p>";
            echo "<label>Despesa4....:";
            echo "<input type='input' name='des4' required size='4' >";
        echo "</p>";
        echo "<input class='btn' type='submit'>";
    echo "</section>";
    echo "</form>";
    $rec1 = $_POST['valor1'];
    $rec2 = $_POST['valor2'];
    $recg = $rec1 + $rec2;
    echo "<p>Este é o valor da receita somada: ".$recg;
    $des1 = $_POST['des1'];
    $des2 = $_POST['des2'];
    $des3 = $_POST['des3'];
    $des4 = $_POST['des4'];
    $desg = $des1 + $des2 + $des3 + $des4;
    echo "<p>Valor das despesas somada:".$desg;
    if ($recg>$desg){;
        echo "<h1>vc tá no lucro (credito)</h1>";
    }else {;
        echo "<h1>gasta menos ein (débito)</h1>";
    };
    ?>
</body>
</html>