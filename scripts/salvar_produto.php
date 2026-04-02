<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">   
</head>
<body>    
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
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
        echo "
        <script>
        Swal.fire({
            title: 'Sucesso',
            text: 'Registro realizado com sucesso!',
            icon: 'success',
            confirmButtonText:'OK'
            }).then(() =>{
                window.location.href = '../dashboard.php';
            });
        </script>
        ";
    }else{
        echo "n ok";
    }


}
?>
</body>
</html>