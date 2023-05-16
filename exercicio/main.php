<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./stylephp.css">
    <!--Fontes-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono:wght@100;300;700&display=swap" rel="stylesheet">

    <title>Main</title>
</head>
<body>
    <?php
    include "cabecalho.php";
    ?>
    <form name="rpg" method="post" action>
        <p>
            <label for="nome">Nome:</label> <br>
            <input type="text" name="nome" maxLenght="40" required>
        </p>
        <p>
            <label for="rpgop">Gosta de RPG?</label><br>
                <input type="radio" name="rpgop">Sim
                <input type="radio" name="rpgop">Não
        </p>
        <p>
            <label for="nome">Endereço de E-mail</label> <br>
            <input type="text" name="email" maxLenght="60" required>
        </p>
        <p>
            <label for="nome">Idade</label> <br>
            <input type="number" name="idade"required>
        </p>
        <p>
            <input class="botao"type="submit" name="executar" value="executar">
        </p>
    </form>
    <?php
        if(isset($_POST["executar"]))
            {
                echo "<h1> ==Resultado== </h1>";
                $nome = $_POST["nome"];
                $email = $_POST["email"];
                $idade = $_POST["idade"];
                echo "<h6> Nome: $nome </h6>";
                echo "<h6> E-Mail: $email </h6>";
                echo "<h6> Idade: $idade</h6>";

                include "rodape.php";
            }
    ?>
</body>
</html>