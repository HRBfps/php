<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <title>HOME</title>
</head>
<body class="body2">
    <div>
        <a href='./excluir.php'>
            <p>Excluir</p>
        </a>
        <a href='./index.php'>
            <p>Inicio</p>
        </a>
    </div>
    <?php
        echo "<div>";
            session_start();
            echo "<h1>Nome: ".$_SESSION['nome']."</h1>";
            echo "<h1>Senha: ".$_SESSION['senha']."</h1>";
        echo "</div>";
    ?>
</body>
</html>