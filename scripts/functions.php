<?php

function dadosCadastro($email){
    include "config/conexao.php";
    $sql = "SELECT nome_completo FROM usuarios WHERE nome  = '$email'";
    $result = mysqli_query($conn,$sql);
    $row = mysqli_fetch_assoc($result);

    return $row['nome_completo'];
}

?>