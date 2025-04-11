<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alterando dados Clientes</title>
    <link rel="stylesheet" type="text/css" href="css/estilocad.css">
</head>
<body>
<h1>ALTERANDO DADOS DO CLIENTE</h1>
<section id="principal2"> 
    <figure>
        <a href="index.php" class="cxvoltar">
            <img src="img/btnvoltarcli.png" alt="botao de voltar" id="btnvolt">
        </a>
    </figure>
</body>
</html>
<?php

    include_once "factory/conexao.php";
    $nome = $_POST["cxnome"];
    $email = $_POST["cxemail"];
    $idcli = $_POST["cxid"];
    $alterar = "UPDATE tbcliente SET nome = '$nome', email = '$email' WHERE codigo = '$idcli'";
    
    $executar = mysqli_query($conn, $alterar);

    if ($executar) {
        echo "<p>Dados Alterados com Sucesso!<br/></p>";
    } else {
        echo "<p>Erro ao alterar dados, por favor revise e tente novamente.</p>";
    }
?>


