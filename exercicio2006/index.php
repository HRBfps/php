<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="./style.css">
</head>
<body class="body">
    <?php
    session_start();
    if (isset($_SESSION['nome']) == true) {
        echo "<div>";
        echo "<a href='conectar.php'><h1>login</h1></a>";
        echo "<a href='home.php'<h1>Home</p></h1>";
        echo "</div>";
    }else {
        echo "<a href='conectar.php'><h1>login</h1></a>";
    }
    ?>
</body>
</html>