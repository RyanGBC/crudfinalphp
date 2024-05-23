<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consulta Clientes</title>
    <link rel="stylesheet" type="text/css" href="css/estilocad.css">
</head>
<body>
<h1>CONSULTANDO CLIENTE</h1>
<section id="principal2"> 
    <figure>
        <a href="index.php" class="cxvoltar">
            <img src="img/btnvoltarcli.png" alt="botao de voltar" id="btnvolt">
        </a>
    </figure>
    <?php

    include_once "factory/conexao.php";
    $cod = $_POST["cxpesquisanome"];
    $consulta = "SELECT * FROM tbcliente WHERE nome = '$cod'";
    $executar = mysqli_query($conn, $consulta);
    $linha = mysqli_fetch_array($executar);

    if ($linha) {
        echo "Nome: " . $linha["nome"] . "<br/>";
        echo "E-mail: " . $linha["email"] . "<br/>";
        echo '<a href="telaexcluirclientes.php?id=' . $linha["codigo"] . '">Excluir</a> ';
        echo '<a href="telaalterarcliente.php">Alterar</a>';
    } else {
        echo "Cliente não encontrado.";
    }
?>
</body>
</html>






















