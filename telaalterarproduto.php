<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alterando Cliente</title>
    <link rel="stylesheet" type="text/css" href="css/estilocad.css">
</head>
<body>
    <figure>
        <img src="" alt="">
        <h1>Alterando Dados do Produto</h1>
    </figure>
    <section id="principal2">
        <h2>Digite os dados do produto que deseja alterar</h2> 
    <form action="alterarproduto.php" method="POST">
        ID do Produto:
        <input type="text" name="cxid" id="cxid"><br/><br/>
         Produto:
         <input type="text" name="cxprod"/><br/><br/>
         Data de Validade:
         <input type="date" name="cxdata"/><br/><br/>
         Preço:
         <input type="number" name="cxpreco"/><br/><br/>
         <input type="submit" value="ALTERAR">
     </form><br/>
    <figure>
        <a href="index.php" class="cxvoltar">
        <img src="img/btnvoltarcli.png" alt="botao de voltar" id="btnvolt">
        </a>
    </figure>
</body>
</html>