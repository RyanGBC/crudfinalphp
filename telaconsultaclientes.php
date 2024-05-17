<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="css/estilocad.css">
</head>
<body>
    <h1>Consultar Cliente</h1>
    <section id="principal2">
        <h2>   </h2> 
    <form action="consultaclientenome.php" method="POST">
         Nome:
         <input type="text" name="cxpesquisanome" id="cxpesquisanome"/><br/><br/>
         E-mail:
         <input type="text" name="cxemail"/><br/><br/>
         <input type="submit" value="PESQUISAR">
     </form><br/>
    <section>
        <h2>VER TODOS OS CLIENTES</h2>
        <form action="listarclientes.php">
            <input type="submit" value="Ver todos" id="cxclitodos">
        </form>
    </section>
    <figure>
        <a href="index.php" class="cxvoltar">
        <img src="img/btnvoltarcli.png" alt="botao de voltar" id="btnvolt">
        </a>
    </figure>
</body>
</html>