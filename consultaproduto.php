<?php
    include_once "factory/conexao.php";
    $nome = $_POST["cxpesquisanome"];
    $consulta = "select *from tbproduto 
    where nome = '$nome'";
    $executar = mysqli_query($conn,$consulta);
    $linha = mysqli_fetch_array($executar);

?>
Nome:
<?php echo $linha["nome"] ?><br/>
Preço:
<?php echo $linha["preço"]?><br/>
<a href="index.php">Voltar</a>
