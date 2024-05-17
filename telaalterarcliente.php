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
        <h1>Alterando Dados do cliente</h1>
    </figure>
    <section id="principal2">
        <h2>Digite os dados de quem você quer alterar</h2> 
    <form action="alterarcliente.php" method="POST">
        ID do Cliente:
        <input type="text" name="cxid" id="cxid"><br/><br/>
         Nome:
         <input type="text" name="cxnome" id="cxnome"/><br/><br/>
         E-mail:
         <input type="text" name="cxemail"/><br/><br/>
         <input type="submit" value="ALTERAR">
     </form><br/>
    </nav>
    <figure>
        <a href="index.php" class="cxvoltar">
        <img src="img/btnvoltarcli.png" alt="botao de voltar" id="btnvolt">
        </a>
    </figure>
</body>
</html>