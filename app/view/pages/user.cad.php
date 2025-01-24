<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cadastro de Usuário</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Arquivo CSS -->
    <link rel="stylesheet" href="../../../assets/css/user.css">
</head>

<body>
    <!-- Header -->
    <header class="navbar navbar-dark sticky-top flex-md-nowrap p-0 shadow">
        <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="#">Senac</a>
        <button class="navbar-toggler d-md-none collapsed" type="button" data-bs-toggle="collapse"
            data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
    </header>

    <div class="container-fluid">
        <div class="row">
            <!-- Menu Lateral -->
            <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block sidebar collapse">
                <div class="position-sticky pt-3">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">
                                <span data-feather="home"></span> Início
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <span data-feather="user-plus"></span> Cadastro de Docentes
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <span data-feather="file-text"></span> Relatórios
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>

            <!-- Conteúdo Principal -->
            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                <div
                    class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <h1 class="h2">Cadastro de Usuário</h1>
                </div>

                <!-- Formulário -->
                <div class="form-container">
                    <form id="formCadastro" action="?acao=cadastrar" method="post" novalidate>
                        <div class="row g-3">
                            <div class="col-sm-6">
                                <label class="form-label">Login</label>
                                <input type="text" class="form-control" name="nome" required>
                                <div class="invalid-feedback">Campo obrigatório.</div>
                            </div>
                            <div class="col-sm-6">
                                <label class="form-label">Senha</label>
                                <input type="password" class="form-control" name="senha" required>
                                <div class="invalid-feedback">Campo obrigatório.</div>
                            </div>
                            <div class="col-sm-6">
                                <label class="form-label">Nome de Usuário</label>
                                <input type="text" class="form-control" name="usuario" required>
                                <div class="invalid-feedback">Campo obrigatório.</div>
                            </div>
                        </div>

                        <hr class="my-4">

                        <!-- Botões -->
                        <div class="d-flex justify-content-between">
                            <button class="btn btn-primary" type="submit">Cadastrar Usuário</button>
                            <button class="btn btn-secondary" type="button" onclick="history.back()">Voltar</button>
                        </div>
                    </form>
                </div>
            </main>
        </div>
    </div>

    <!-- Scripts -->
    <script src=""></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/feather-icons/dist/feather.min.js"></script>
</body>

</html>
