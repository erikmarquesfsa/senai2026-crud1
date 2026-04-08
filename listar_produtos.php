<?php
session_start();
if (!isset($_SESSION['usuario'])) {
    header("Location:index.php");
    exit;
}
include "scripts/functions.php";
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="css/principal.css" rel="stylesheet">
    <title>Listar Produtos</title>
</head>

<body>
    <?php include "menu.php"; ?>
    <div class="container">
        <h1>Nossos Produtos</h1>
        <table class="table table-striped text-center align-middle">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nome Produto</th>
                    <th scope="col">Imagem</th>
                    <th scope="col">Valor</th>
                    <th scope="col">Desconto</th>
                    <th scope="col">&nbsp;</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include("config/conexao.php");
                $result = $conn->query("SELECT * FROM produtos");
                while($row = $result->fetch_assoc()){
                ?>
                <tr>
                    <td><?php echo $row['id']; ?></td>
                    <td><?php echo $row['nome_produto']; ?></td>
                    <td><img src="<?php echo $row['url_imagem']; ?>" width="150px" height="150px"></td>
                    <td>
                        <?php echo "R$ ". number_format($row['valor'],2,',','.'); ?>
                    </td>
                    <td><?php echo $row['desconto']; ?></td>
                    <td>
                        <a href="editar.php" class="btn btn-warning">
                            <i class="fa-solid fa-pen-to-square"></i>
                        </a>
                        <a href="deletar.php" class="btn btn-danger">
                            <i class="fa-solid fa-trash"></i>
                        </a>
                    </td>
                </tr>
                <?php } ?>               
            </tbody>
        </table>
    </div>
</body>

</html>