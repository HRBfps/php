<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>
</head>
<body>
    <?php
        $nome = "<i>Henrique Rodrigues</i>";
        $valor = 1400.50;
        $ano = 2023;
        echo"<body style='background-color:antiquewhite'>";
        echo"<h1>Cálculo de Mensalidade</h1>";
        echo"<hr size='3' color='#c98638' width='20%' align='left'>";
        echo"<strong>Nome do aluno: </strong>".$nome;
        echo"<br>";
        echo"<strong>Valor do curso: </strong>".$valor;
        echo"<br>";
        echo"<strong>Ano: </strong>".$ano;
        echo"<br>";
        echo"<strong>Quantidade de Parcelas: </strong>5";
        echo"<br>";
        echo"<strong style='text-decoration: underline'>Valor da Mensalidade:</strong> R$ ".$valor / 5;
        echo"<hr size='3' color='#c98638' width='20%' align='left'>";
        echo"<strong style='text-decoration: underline'>Tipos de Variáveis Utilizados</strong>";
        echo"<p>String: $nome Inteiro: $valor e Float: ".$valor/5;
    ?>
</body>
</html>