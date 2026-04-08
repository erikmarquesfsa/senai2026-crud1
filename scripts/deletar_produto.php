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
if($_SERVER["REQUEST_METHOD"]=="GET"){
    include "../config/conexao.php";
    
    $id = $_GET['id'];
    $sql = "DELETE FROM produtos WHERE id = '$id'";
    $resultado = mysqli_query($conn,$sql);

    if($resultado){
        echo "
        <script>
        Swal.fire({
            title: 'Sucesso',
            text: 'Registro deletado com sucesso!',
            icon: 'success',
            confirmButtonText:'OK'
            }).then(() =>{
                window.location.href = '../listar_produtos.php';
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