<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conta Corrente</title>
</head>
<body>
    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST")
        {
            echo "<h3>CONTROLE BANCARIO EM PHP</h3>";
            $Nome_Banco = ""; // Armazena o nome no banco
            $TipoDeConta = ""; // Armazena o tipo de conta
            $Nome_Correntista = $_POST["nome"];
            echo "<strong>Nome do correntista: </strong>" . $Nome_Correntista;
            $Banco = $_POST["banco"];
            if ($Banco == "caixa") {
                $Banco = "Caixa Econômica Federal";
            }else if ($Banco == "brasil") { 
                $Banco = "Banco do Brasil";
            }else if ($Banco == "santander") { 
                $Banco = "Banco Santander";
            }else if ($Banco == "bradesco") { 
                $Banco = "Banco Bradesco";
            }else if ($Banco == "mercantil") {
                $Banco = "Banco Mercantil do Brasil"; 
            }
            echo "<br><strong> Nome do banco: </strong>" . $Banco;
            
        }else {
            echo "<h1>Volte á pagina e complete o cadastro</h1>";
        }
    ?>
</body>
</html>