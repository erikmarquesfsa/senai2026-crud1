<?php
session_start();
include "../config/conexao.php";

//verifica se veio por post
if($_SERVER["REQUEST_METHOD"]=="POST"){

    //PEGANDO OS DADOS DO FORM
    $usuario = $_POST['email'];
    $senha = $_POST['senha'];

    //evita injection
    $usuario = mysqli_real_escape_string($conn,$usuario);
    $senha =  mysqli_real_escape_string($conn,$senha);

    $sql = "SELECT * FROM usuarios WHERE nome = '$usuario' AND senha = '$senha'";
    $result = mysqli_query($conn,$sql);

    //verifica se usuario existe no banco
    if(mysqli_num_rows($result)>0){
        $_SESSION['usuario'] = $usuario;
        header("Location:../dashboard.php");
    }else{
        echo "login invalido";
    }

}



/* if($usuario=="admin@gmail.com" and $senha =="123"){
    $_SESSION['usuario'] = $usuario;
    header("Location:../dashboard.php");
}else{
    echo "login invalido";
} */

?>