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
    $consulta = "SELECT * FROM tbcliente WHERE nome LIKE '%$cod%'";
    $executar = mysqli_query($conn, $consulta);
    $linha = mysqli_fetch_array($executar);

    if ($linha) {
        echo "ID: " . $linha["codigo"] . "<br/>";
        echo "Nome: " . $linha["nome"] . "<br/>";
        echo "E-mail: " . $linha["email"] . "<br/>";
        echo '<a href="telaexcluirclientes.php?id=' . $linha["codigo"] . '"><img src="img/excluir.png" alt="Excluir" width="30" height="30" style="margin-left: 25px; margin-top: 20px;"></a>';
        echo '<a href="telaalterarcliente.php" style="margin-left: 40px;"><img src="img/alterar.png" alt="Alterar" width="30" height="30"></a>';
        echo '<a href="telaconsultaclientes.php" class="cxvoltar">
                <img src="img/btnvoltarcli.png" alt="botao de voltar" id="btnvolt"></a>';
    } else {
        echo "Cliente não encontrado.";
        echo '<a href="telaconsultaclientes.php" class="cxvoltar">
        <img src="img/btnvoltarcli.png" alt="botao de voltar" id="btnvolt"></a>'; 
    }
?>
</body>
</html>






















