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
  <title>Dashboard</title>
</head>

<body>
  <?php include "menu.php"; ?>

  <div class="container">
    <h1 class="titulo">Cadastre seu Produto</h1>
    <form method="post" action="scripts/salvar_produto.php">
      <div class="row g-3">
        <div class="col">
          <label class="form-label">Nome do Produto:</label>
          <input type="text" name="nome_produto" class="form-control" placeholder="Informe o nome do produto">
        </div>
        <div class="col">
          <label class="form-label">Imagem do Produto</label>
          <input type="text" name="imagem_produto" class="form-control" placeholder="http://...">
        </div>
      </div>

      <div class="row g-3">
        <div class="col">
          <label class="form-label">Valor do Produto:</label>
          <input type="number" name="valor_produto" step="0.01" class="form-control" placeholder="Valor">
        </div>
        <div class="col">
          <label class="form-label">Desconto</label>
          <input type="number" name="desconto_produto" step="0.01" class="form-control" placeholder="Desconto">
        </div>
      </div>

      <div class="col-md-12">
        <input type="submit" class="btn btn-success" value="Salvar">
      </div>
      
    </form>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>

</html>