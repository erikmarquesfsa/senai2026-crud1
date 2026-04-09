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
                <form method="post" action="scripts/alterar_produto.php">
                <tr>
                    <td>
                        <input type="text" name="id" class="form-control" value="<?php echo $row['id']; ?>">
                    </td>
                    <td>
                        <input type="text" name="produto" class="form-control" value="<?php echo $row['nome_produto']; ?>">
                    </td>
                    <td>
                        <textarea cols="40" rows="5" name="imagem" class="form-control">
                            <?php echo $row['url_imagem']; ?>
                        </textarea>
                        <img src="<?php echo $row['url_imagem']; ?>" width="50px" height="50px">
                    </td>
                    <td>
                        <input type="text" name="valor" class="form-control" value="<?php echo $row['valor']; ?>">
                    </td>
                    <td>
                         <input type="text" name="desconto" class="form-control" value="<?php echo $row['desconto']; ?>">
                        </td>
                    <td>
                        <input type="submit" value="Alterar" class="btn btn-warning">                
                    </td>
                </tr>
                </form>
                <?php } ?>               
            </tbody>
        </table>
    </div>
</body>

</html>