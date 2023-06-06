<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exibir</title>
    <link rel="stylesheet" href="./style.css">
</head>
<body>
    <?php
    session_start();
        //mostrar os dados na página
        echo "<p>Nome:".$_SESSION['nome'];
        echo "<p>Email:".$_SESSION['email'];
    ?>
    <p><a href='login.php'>Cadastrar novamente</a>
    <a href='logout.php'>Sair</a>
    </p>
</body>
</html>