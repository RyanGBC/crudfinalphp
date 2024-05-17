<?php 
    include_once "factory/conexao.php";
    $nome = $_GET["nome"];
    $excluir = "delete from tbproduto where 
    nome = '$nome'";
    $executar = mysqli_query($conn,$excluir);
    if($executar)
    {
         echo "Produto excluido com sucesso!";
         echo "<br/>";
    }
    else
    {
        echo "Erro ao excluir Produto";
    }
?>
<a href="index.php">Voltar</a>