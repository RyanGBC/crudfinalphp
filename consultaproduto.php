<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consulta Clientes</title>
    <link rel="stylesheet" type="text/css" href="css/estilocad.css">
</head>
<body>
<h1>CONSULTANDO PRODUTOS</h1>
<section id="principal2"> 
    <figure>
        <a href="index.php" class="cxvoltar">
            <img src="img/btnvoltarcli.png" alt="botao de voltar" id="btnvolt">
        </a>
    </figure>
    <?php
    
    include_once "factory/conexao.php";
    $nome = $_POST["cxpesquisaproduto"];
    $consulta = "SELECT * FROM tbprodutos WHERE produto LIKE '%$nome%'";
    $resultado = mysqli_query($conn, $consulta);
    $linha = mysqli_fetch_array($resultado);

    if ($linha) {
        echo "ID: " . $linha["codigo"] . "<br/>";
        echo "Produto: " . $linha["produto"] . "<br/>";
        echo "Data de Validade: " . $linha["datavalidade"] . "<br/>";
        echo "Preço: ". $linha["valor"] . "<br/>";
        echo '<a href="telaexcluirproduto.php?id=' . $linha["codigo"] . '">Excluir</a> ';
        echo '<a href="telaalterarproduto.php">Alterar</a>';
        echo '<a href="telaconsultaclientes.php" class="cxvoltar">
            <img src="img/btnvoltarcli.png" alt="botao de voltar" id="btnvolt">';
    } else {
        echo "Produto não encontrado.";
        echo '<a href="telaconsultaclientes.php" class="cxvoltar">
        <img src="img/btnvoltarcli.png" alt="botao de voltar" id="btnvolt">';
    }
?>
</body>
</html>
