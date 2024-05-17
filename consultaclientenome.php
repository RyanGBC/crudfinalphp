<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consulta Clientes</title>
    <link rel="stylesheet" type="text/css" href="css/estilocad.css">
</head>
<body>
<h1>CONSULTANDO CLIENTE</h1>
<section id="principal2"> 
    <figure>
        <a href="index.php" class="cxvoltar">
            <img src="img/btnvoltarcli.png" alt="botao de voltar" id="btnvolt">
        </a>
    </figure>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        include_once "factory/conexao.php";
        
        // Sanitização e segurança
        $cod = mysqli_real_escape_string($conn, $_POST["cxpesquisanome"]);
        $consulta = "SELECT * FROM tbcliente WHERE nome = ?";
        $stmt = mysqli_prepare($conn, $consulta);
        mysqli_stmt_bind_param($stmt, "s", $cod);
        mysqli_stmt_execute($stmt);
        $resultado = mysqli_stmt_get_result($stmt);
        $linha = mysqli_fetch_array($resultado);
        
        if ($linha) {
            echo "Nome: " . htmlspecialchars($linha["nome"]) . "<br/>";
            echo "E-mail: " . htmlspecialchars($linha["email"]) . "<br/>";
            echo '<a href="excluircliente.php?id=' . htmlspecialchars($linha["codigo"]) . '">Excluir</a> ';
            echo '<a href="">Alterar</a>';
        } else {
            echo "Cliente não encontrado.";
        }
        
        // Libera o statement e fecha a conexão
        mysqli_stmt_close($stmt);
        mysqli_close($conn);
    }
    ?>
</section>
</body>
</html>






















