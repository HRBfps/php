<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>eItA</title>
</head>
<body>
    <?php
        include "cabecalho.php"; // Importa o código do cabecalho

        include "rodape.php"; // importa o código do rodapé
    ?>

    <form name="strings" method="post" action"">
        <p>
            <label for="nome">Nome:</label>
            <input type="text" name="nome" maxLenght="40" required>
        </p>
        <p>
            <input type="submit" name="executar" value="executar">
        </p>
    </form>
    <?php
        if(isset($_POST["executar"]))
        {
            $nome = $_POST["nome"];
            $nome = strtolower($nome);
            echo "<h3>Converte para minúsculas</h3>";
            echo "Nome: $nome";
            echo "<h3>Converte para maíusculas</h3>";
            $nome = strtoupper($nome);
            echo "Nome: $nome";

            include"rodape.php";
        }
    ?>
</body>
</html>