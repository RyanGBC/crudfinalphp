<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro do Produto</title>
    <link rel="stylesheet" type="text/css" href="css/estilocad.css">
</head>
<body>
    <figure>
        <img src="" alt="">
        <h1>Cadastrando Produto</h1>
    </figure>
    <section id="principal2">
        <h2>  </h2> 
    <figure>
        <img src="img/btnvoltarcli.png" alt="botao de voltar" id="btnvolt">
        </a>
    </figure>
</body>
</html>
<?php
    if ($_POST["cxproduto"] != "")
    {
        include_once "factory/conexao.php";
        $produto = $_POST ["cxproduto"];
        $data = $_POST ["cxdata"];
        $valor = $_POST ["cxvalor"];
        $inserir = "insert into tbprodutos(produto, datavalidade, valor)
        values('$produto',' $data','$valor')";
        $cadastrar = mysqli_query($conn, $inserir);
        echo "Produto Cadastrado com sucesso!";
    }

    else
    {
        echo "Produto não Cadastrado, Campo Vazio!";


    }
?>