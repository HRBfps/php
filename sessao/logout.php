<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logout</title>
    <link rel="stylesheet" href="./style.css">
</head>
<body>
    <?php
        session_start(); // inicia a sessão
        session_destroy(); // elimina as variáveis da sessão
        echo "<marquee direction='right'>Dados excluidos com sucesso</marquee>";
    ?>
    <p><a href="login.php">Home</a></p>
</body>
</html>