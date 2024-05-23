<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro do cliente</title>
    <link rel="stylesheet" type="text/css" href="css/estilocad.css">
</head>
<body>
    <figure>
        <img src="" alt="">
        <h1>Cadastrando cliente</h1>
    </figure>
    <section id="principal2">
        <h2>  </h2> 
    <figure>
        <a href="index.php" class="cxvoltar">
        <img src="img/btnvoltarcli.png" alt="botao de voltar" id="btnvolt">
        </a>
    </figure>
</body>
</html>
<?php
    if($_POST["cxnome"] != "")
    {
       include_once "factory/conexao.php";
       $nome = $_POST["cxnome"];
       $email = $_POST["cxemail"];
       $inserir = "insert into tbcliente(nome,email)
       values('$nome','$email')";
       $query = mysqli_query($conn,$inserir);
       echo "<p>Dados Cadastrados com sucesso<br/></p>";
    }
    else
    {
        echo "Dados não cadastrado!";
    }
?>