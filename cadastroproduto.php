<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadrastro Do Produto</title>
    <link rel="stylesheet" type="text/css" href="css/estilocad.css">
</head>
<body>
    <h1>Cadastrar Produtos</h1>
    <section id="principal2">
    <form action="inserirproduto.php" method="POST">
        Produto:
        <input type="text" name="cxproduto" id="cxproduto" required/><br><br/>
        Data de Validade:
        <input type="date" name="cxdata" required/><br><br/>
        Valor do Produto:
        <input type="number" name ="cxvalor" required/><br><br/>
        <input type="submit" value="Cadastrar"/>
    </form><br/>
    <figure>
        <a href="index.php" class="cxvoltar">
        <img src="img/btnvoltarcli.png" alt="botao de voltar" id="btnvolt">
        </a>
    </figure>
</body>
</html>