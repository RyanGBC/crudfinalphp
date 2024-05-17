<?php
    if($_POST["cxnome"] != "")
    {
       include_once "factory/conexao.php";
       $nome = $_POST["cxnome"];
       $email = $_POST["cxemail"];
       $sql = "insert into tbcliente(nome,email)
       values('$nome','$email')";
       $query = mysqli_query($conn,$sql);
       echo "<p>Dados Cadastrados com sucesso<br/></p>";
       echo "<a href='index.php'>Voltar</a>";
    }
    else
    {
        echo "Dados não cadastrado!";
    }
?>