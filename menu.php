<nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand img-fluid"  href="#">
                <img src="https://marketplace.canva.com/EAGGckKZVzU/1/0/1600w/canva-logotipo-confeitaria-bolo-moderno-rose-marrombolo-coMoPmDVMzc.jpg" height="50px" width="50px">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="dashboard.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="dashboard.php">Cadastrar Produtos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="listar_produtos.php">Listar Produtos</a>
                    </li>
                </ul>
                <b class="ms-auto">Seja bem vindo <?php echo dadosCadastro($_SESSION['usuario']); ?></b>
                &nbsp;<a href="index.php" class="btn btn-danger">Sair</a>
            </div>
        </div>
    </nav>