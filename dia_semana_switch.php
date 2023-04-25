<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dia de semana</title>
</head>
<body>
    <?php
        date_default_timezone_set('GMT');
        echo "<h2>Dia da semana - Estrutura Switch <h2>";
        $dia = date("Y-m-d , H:m:s");
        $dia_semana = date("w");
        $mensagem="";
        echo "<h3>Dia da semana: $dia_semana </h3>";
        switch($dia_semana)
        {
            case 0:
                $mensagem="Domingo";
                break; 
            case 1:
                $mensagem="Segunda-Feira";
                break;
            case 2:
                $mensagem="Terça-Feira";
                break;
            case 3:
                $mensagem="Quarta-Feira";
                break;
            case 4:
                $mensagem="Quinta-Feira";
                break;
            case 5:
                $mensagem="Sexta-feira";
                break;
            case 6:
                $mensagem="Sábado";
                break;
        }
        echo "<h3>Dia da semana: $mensagem </h3>";
        echo "<h3>Relógio: $dia</h3>";
    ?>
</body>
</html>