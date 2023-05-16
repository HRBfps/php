<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sobre as funções Include e Require</title>
</head>
<body>
    <?php
        require "cabecalho.php";
            echo "<p>";
                echo "A função include como o require, permite importar inforamções de um arquivo";
                echo "<br> A diferença é que ao utilizarmos a função include,
                o bloco de códigos não é interrompido, quando existe algum erro ao chamar o arquivo,
                ao contrário da função require";
            echo "</p>";
        require "rodape.php";
    ?>
</body>
</html>