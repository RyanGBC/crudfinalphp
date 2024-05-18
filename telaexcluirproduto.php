<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Excluindo cliente</title>
    <link rel="stylesheet" type="text/css" href="css/estilocad.css">
</head>
<body>
    <h1>Excluir Produtos</h1>
    <section id="principal2">
        <h2>     </h2> 
    <form action="excluirproduto.php" method="POST">
         ID do Produto:
         <input type="text" name="id" id="id"/><br/><br/>
         Produto:
         <input type="text" name="cxpesquisaproduto"/><br/><br/>
         Data de validade:
         <input type="date" name="cxdata"/><br/><br/>
         Valor do Produto:
         <input type="number" name="cxnum"><br/><br/>
         <input type="submit" value="EXCLUIR">
     </form><br/>
    <figure>
        <a href="index.php" class="cxvoltar">
        <img src="img/btnvoltarcli.png" alt="botao de voltar" id="btnvolt">
        </a>
    </figure>
</body>
</html>
