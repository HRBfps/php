<?php
$host = "localhost";
$user = "root";
$pass = "usbw"; // Usuário do XAMPP deixar senha em branco
$banco = "henri"; // Nome do banco
$conexao = mysqli_connect($host,$user,$pass) or die(mysqli_error($conexao));
mysqli_select_db($conexao, $banco);
?>