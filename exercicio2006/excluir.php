<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <title>Document</title>
</head>
<body class="body">
    <?php
        session_start();
        session_destroy();
        echo "<div>";
        echo "<h1>Sessão excluida.</h1>";
        echo "<a href='index.php'><h3>Voltar pra home</h3></a>";
        echo "<div>";
    ?>    
</body>
</html>
