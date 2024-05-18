<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alterando dados Produtos</title>
    <link rel="stylesheet" type="text/css" href="css/estilocad.css">
</head>
<body>
<h1>ALTERANDO DADOS DO PRODUTO</h1>
<section id="principal2"> 
    <figure>
        <a href="index.php" class="cxvoltar">
            <img src="img/btnvoltarcli.png" alt="botao de voltar" id="btnvolt">
        </a>
    </figure>
</body>
</html>
<?php
if ($_POST["cxprod"] != "" && $_POST["cxdata"] != "" && isset($_POST["cxid"]) && isset($_POST["cxprod"])) {
    include_once "factory/conexao.php";
    $produto = $_POST["cxprod"];
    $data = $_POST["cxdata"];
    $idprod = $_POST["cxid"];
    $preco = $_POST["cxpreco"];
    $sql = "UPDATE tbprodutos SET produto = '$produto', datavalidade = '$data', valor = '$preco' WHERE codigo = '$idprod'";
    
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



