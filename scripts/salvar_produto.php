<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
    include "../config/conexao.php";
    $nome = $_POST['nome_produto'];
    $url = $_POST['imagem_produto'];
    $valor = $_POST['valor_produto'];
    $desconto = $_POST['desconto_produto'];

    $sql = "INSERT INTO produtos (nome_produto, url_imagem,valor,desconto) VALUES ('$nome','$url','$valor','$desconto')";
    $resultado = mysqli_query($conn,$sql);

    if($resultado){
        echo "ok";
    }else{
        echo "n ok";
    }


}
?>