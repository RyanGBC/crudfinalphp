<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="css/estilocad.css">
</head>
<body>
    <h1>Consultar Produtos</h1>
    <section id="principal2">
        <h2>   </h2> 
    <form action="consultaproduto.php" method="POST">
         Produto:
         <input type="text" name="cxpesquisaproduto"/><br/><br/>
         Data de Validade:
         <input type="date" name="cxdata"/><br/><br/>
         Valor do Produto:
         <input type="number" name="cxnum" placeholder="R$"/><br/><br/>
         <input type="submit" value="PESQUISAR"/>
     </form><br/>
    <section>
        <h2>VER TODOS OS PRODUTOS</h2>
        <form action="listarprodutos.php">
            <input type="submit" value="Ver todos" id="cxprodtodos">
        </form>
    </section>
    <figure>
        <a href="index.php" class="cxvoltar">
        <img src="img/btnvoltarcli.png" alt="botao de voltar" id="btnvolt">
        </a>
    </figure>
</body>
</html>