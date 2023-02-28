<!DOCTYPE html> <!--Começa usando o HTML -->
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operador Matemático .em PHP</title>
</head>
<body>
    <?php
    $n1 = 10;
    $n2 = 15;
    $soma = $n1 + $n2;
    $subtrai = $n1 - $n2;
    $multiplica = $n1 * $n2;
    $divisa = $n1 / $n2;
    echo"<h3>Operadores Matemáticos</h3>"; 
    echo"<hr size='3' color='#ff0000' width='22%' align='left'>"; // CSS em PhP e Quebra de linha estilizada
    echo"<h3>Operações usando o numero $n1 e $n2 respectivamente</h3>"; // é possivel escrever as váriavéis dentro das ""
    echo "Soma = ", $soma;
    echo"<br>"; //quebra de linha normal, só pula a linha
    echo "Subtração = ", $subtrai;
    echo"<br>";
    echo "Multiplicação =", $multiplica;
    echo"<br>";
    echo "Divisão =", $divisa;
    echo"<hr size='3' color='#ff0000' width='22%' align='left'>";
    echo"<h3>Exibindo o tipo da variável</h3>"; //o var_dump exibe o tipo da variável selecionada
    echo "n1 = ",var_dump($n1);
    echo "<br>";
    echo "n2 = ",var_dump($n2);
    ?>
</body>
</html>