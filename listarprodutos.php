<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listando Produtos</title>
    <link rel="stylesheet" type="text/css" href="css/estilolistaprod.css">
</head>
<body>
    <h1>Produtos cadastrados</h1>
    <nav id="principal2">
        <figure>
            <img src="" alt="">
        </figure>
        <nav class="lista-produtos">
            <?php
                include_once "factory/conexao.php";
                $consulta = "SELECT * FROM tbprodutos";
                $executar = mysqli_query($conn, $consulta);
                while($linha = mysqli_fetch_array($executar)) {
            ?>
            <nav class="produtos">
                Codigo:
                <input type="number" class="input-produto" value="<?php echo $linha['codigo']; ?>" /> <br/>
                Produto:
                <input type="text" class="input-produto" value="<?php echo $linha['produto']; ?>" /> <br/><br/>
                Data de Validade:
                <input type="date" class="input-produto" value="<?php echo $linha['datavalidade']; ?>" /> <br/><br/><br/>
                Preço:
                <input type="number" class="input-produto" value="<?php echo $linha['valor']; ?>" /> <br/><br/><br/><br/>
            </nav>
            <?php } ?>
        </nav>
        <figure class="cxvoltar">
            <a href="telaconsultaprodutos.php">
                <img src="img/btnvoltarcli.png" alt="botao de voltar" id="btnvolt">
            </a>
        </figure>
    </nav>
</body>
</html>
