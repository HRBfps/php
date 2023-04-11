<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>banco</title>
    <link rel="stylesheet" href="./style_cc.css">
</head>
<body>
    <form name='conta_corrente' method='post' action='conta_corrente.php'>
        <table>
            <caption>Cadastro de Conta Corrente</caption>

            <tr>
                <td><label for="nome">Nome:</label></td>
                <td><input type="text" name="nome" size="40" maxlenght=50 required
                placeholder="Informe o nome do correntista">
                </td>
            </tr>
            <tr>
                <td><label for="agencia">Agência:</label></td>
                <td><input type="text" name="agencia" size="20" maxlenght='20' required
                placeholder="Informe o número da agência">
                </td>
            </tr>
            <tr>
                <td><label for="banco">Banco:</label></td>
                <td>
                    <select name="banco"> 
                        <option value="#"></option>
                        <option value="caixa">Caixa Econômica Federal</option>
                        <option value="brasil">Banco do Brasil</option>
                        <option value="mercantil">Banco Mercantil</option>
                        <option value="santander">Banco Santander</option>
                        <option value="bradesco">Banco Bradesco</option>
                    </select>
                </td>
            <tr>
                <td><label for="conta_corrente"><strong>Nº Conta Corrente: </strong></label></td>
                <td><input type="text" name="conta_corrente" size="30" maxlenght="25" required
                placeholder="Informe o número da conta corrente">
                </td>
            </tr>
            <tr>
                <td><label for="tipo_conta"><strong>Tipo de conta: &rarr;</strong></label></td>
                <td>
                    <input type="radio" name="tipo_conta">Conta Comum
                    <input type="radio" name="tipo_conta">Conta Especial
                </td>
            </tr>
            <tr>
                <td><label for="data_abertura">Data de abertura"</label></td>
                <td><input type="date" name="data_abertura" required></td>
            </tr>
            <tr>
                <td><label for="cpf">CPF:</label></td>
                <td><input type="text" name="cpf" required size="14" maxlenght="14"></td>
            </tr>
            <tr>
                <td><label for="saldo_inicial">Salvo inicial</label></td>
                <td><input type="number" name="saldo_inicial" value="0" step="0.01" min="0"></td>
            </tr>
            <tr>
                <td><label for="deposito">Deposito</label></td>
                <td><input type="number" name="deposito" value="0" step="0.01" min="0.01"></td>
            </tr>
            <tr>
                <td colspan="2" align="center">
                    <input type="submit" value="Cadastrar" name="cadastrar" class="botao">
                </td>
            </tr>
        </table>
    </form>
</body>
</html>