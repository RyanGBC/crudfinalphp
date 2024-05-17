<?php
    if ($_POST["cxproduto"] != "")
    {
        include_once "factory/conexao.php";
        $produto = $_POST ["cxproduto"];
        $data = $_POST ["cxdata"];
        $valor = $_POST ["cxvalor"];
        $inserir = "insert into tbprodutos(produto, datavalidade, valor)
        values('$produto',' $data','$valor')";
        $cadastrar = mysqli_query($conn, $inserir);
        echo "Produto Cadastrado com sucesso!";
        echo '<br><a href="cadastroproduto.php">Voltar</a>';
    }

    else
    {
        echo "Produto não Cadastrado, Campo Vazio!";


    }
?>