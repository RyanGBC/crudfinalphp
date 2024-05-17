<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="css/estilocad.css">
</head>
<body>
    <h1>Cadastrar Clientes</h1>
    <section id="principal2"> 
    <form action="inserircliente.php" method="POST">
         Nome:
         <input type="text" name="cxnome" id="cxnome"/><br/><br/>
         E-mail:
         <input type="text" name="cxemail"/><br/><br/>
         <input type="submit" value="Cadastrar">
     </form><br/>
    <figure>
        <a href="index.php" class="cxvoltar">
        <img src="img/btnvoltarcli.png" alt="botao de voltar" id="btnvolt">
        </a>
    </figure>
</body>
</html>
