<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Login</title>
    <link rel="stylesheet" href="./style.css">
</head>
<body class="body">
    <div class="container">
        <h3>Cadastro de Login</h3>
        <form name="login" method="post" action="">
            <div>
                <label for="nome">Nome:</label>
                <input type="text" name="nome" maxLenght="50" required>
            </div>
            <div>
                <label for="senha">Senha:</label>
                <input type="password" name="senha" maxlenght="20" required>
            </div>
            <input class="input" type="submit" value="Cadastrar" name="cadastrar">
        </form>
        <div>
        <a href='./index.php'><p>Inicio</p></a>
        </div>
        <?php
        if(isset($_POST["cadastrar"]))
        {
            $nome = $_POST["nome"];
            $senha = $_POST["senha"];

            session_start();
            $_SESSION['nome'] = $nome;
            $_SESSION['senha'] = $senha;
            echo "<div>";
                echo "<h3>Login inserido com sucesso!</h3>";
                echo "<a href='./home.php'><h4>Home</4></a>";
            echo "</div>";
        }
    ?>
    </div>
    
</body>
</html>