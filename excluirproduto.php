<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Excluir Produtos</title>
    <link rel="stylesheet" type="text/css" href="css/estilocad.css">
</head>
<body>
<h1>EXCLUINDO PRODUTO</h1>
<section id="principal2"> 
    <figure>
        <a href="index.php" class="cxvoltar">
            <img src="img/btnvoltarcli.png" alt="botao de voltar" id="btnvolt">
        </a>
    </figure>
</body>
</html>
<?php

    include_once "factory/conexao.php";
    
    // Verifica se o 'id' existe realmente
    if (isset($_POST["id"] )) {
        $id = $_POST["id"];
        
        $excluir = "DELETE FROM tbprodutos WHERE codigo = '$id'";
        $executar = mysqli_query($conn, $excluir);

        if ($executar) {
            echo "Produto excluído com sucesso!";
        } else {
            echo "Erro ao excluir o Produto: ";
        }
    } else {
        echo "ID do produto não especificado.";
    }
?>

