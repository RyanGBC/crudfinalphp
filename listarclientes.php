<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro do cliente</title>
    <link rel="stylesheet" type="text/css" href="css/estilolistacli.css">
</head>
<body>
    <h1>Clientes Cadastrados</h1>
    <nav id="principal2">
        <figure>
            <img src="" alt="">
        </figure>
        <nav class="lista-clientes">
            <?php
                include_once "factory/conexao.php";
                $consulta = "SELECT * FROM tbcliente";
                $executar = mysqli_query($conn, $consulta);
                while($linha = mysqli_fetch_array($executar)) {
            ?>
            <div class="cliente">
                Código:
                <input type="number" class="input-cliente" value="<?php echo $linha['codigo']; ?>" /> <br/>
                Nome:
                <input type="text" class="input-cliente" value="<?php echo $linha['nome']; ?>" /> <br/><br/>
                E-mail:
                <input type="text" class="input-cliente" value="<?php echo $linha['email']; ?>" /> <br/><br/><br/>
            </div>
            <?php } ?>
        </nav>
        <figure class="cxvoltar">
            <a href="index.php">
                <img src="img/btnvoltarcli.png" alt="botao de voltar" id="btnvolt">
            </a>
        </figure>
    </nav>
</body>
</html>
