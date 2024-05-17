<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Excluindo cliente</title>
    <link rel="stylesheet" type="text/css" href="css/estilocad.css">
</head>
<body>
    <h1>Excluir Cliente</h1>
    <section id="principal2">
        <h2>     </h2> 
    <form action="excluircliente.php" method="POST">
         ID do Cliente:
         <input type="text" name="id" id="id"/><br/><br/>
         Nome:
         <input type="text" name="cxpesquisanome" id="cxpesquisanome"/><br/><br/>
         E-mail:
         <input type="text" name="cxemail"/><br/><br/>
         <input type="submit" value="EXCLUIR">
     </form><br/>
    <figure>
        <a href="index.php" class="cxvoltar">
        <img src="img/btnvoltarcli.png" alt="botao de voltar" id="btnvolt">
        </a>
    </figure>
</body>
</html>
