<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alterando dados Clientes</title>
    <link rel="stylesheet" type="text/css" href="css/estilocad.css">
</head>
<body>
<h1>ALTERANDO DADOS DO CLIENTE</h1>
<section id="principal2"> 
    <figure>
        <a href="index.php" class="cxvoltar">
            <img src="img/btnvoltarcli.png" alt="botao de voltar" id="btnvolt">
        </a>
    </figure>
</body>
</html>
<?php
if ($_POST["cxnome"] != "" && $_POST["cxemail"] != "" && isset($_POST["cxid"])) {
    include_once "factory/conexao.php";
    $nome = $_POST["cxnome"];
    $email = $_POST["cxemail"];
    $idcli = $_POST["cxid"];
    $sql = "UPDATE tbcliente SET nome = '$nome', email = '$email' WHERE codigo = '$idcli'";
    
    $result = mysqli_query($conn, $sql);

    if ($result) {
        echo "<p>Dados Alterados com Sucesso!<br/></p>";
    } else {
        echo "<p>Erro ao alterar dados.</p>";
    }
} else {
    echo "Dados não alterados [!ERRO]";
}
?>


