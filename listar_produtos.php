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
    <link href="css/principal.css" rel="stylesheet">
    <title>Listar Produtos</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Features</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Pricing</a>
                    </li>
                </ul>
                <b class="ms-auto">Seja bem vindo <?php echo dadosCadastro($_SESSION['usuario']); ?></b>
                &nbsp;<a href="index.php" class="btn btn-danger">Sair</a>
            </div>
        </div>
    </nav>
    <div class="container">
        <h1>Nossos Produtos</h1>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nome Produto</th>
                    <th scope="col">Imagem</th>
                    <th scope="col">Valor</th>
                    <th scope="col">Desconto</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                    <td>@mdo</td>
                </tr>               
            </tbody>
        </table>
    </div>
</body>

</html>