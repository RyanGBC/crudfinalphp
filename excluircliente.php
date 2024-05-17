<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Excluir Clientes</title>
    <link rel="stylesheet" type="text/css" href="css/estilocad.css">
</head>
<body>
<h1>EXCLUINDO CLIENTE</h1>
<section id="principal2"> 
    <figure>
        <a href="index.php" class="cxvoltar">
            <img src="img/btnvoltarcli.png" alt="botao de voltar" id="btnvolt">
        </a>
    </figure>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include_once "factory/conexao.php";
    
    // Verifica se o 'id' existe realmente
    if (isset($_POST["id"]) && !empty($_POST["id"])) {
        $id = $_POST["id"];
        
        $excluir = "DELETE FROM tbcliente WHERE codigo = '$id'";
        $executar = mysqli_query($conn, $excluir);

        if ($executar) {
            echo "Cliente excluído com sucesso!";
        } else {
            echo "Erro ao excluir o cliente: ";
        }
    } else {
        echo "ID do cliente não especificado.";
    }
}
?>

