<?php ?>

<html lang="pt-br">
<head>
    <title>Formulário de Contato</title>
    <link rel="stylesheet" href="../../../assets/css/docente_cad.css">
</head>

<body>

    <?php
    // Cabeçalho da página
    include '../partials/header.php';
    ?>

    <div class="container">
        <h1>Cadastro de Docente</h1>

        <div class="form-row">
            <div class="form-group">
                <label for="nome">Nome:</label>
                <input type="text" id="nome" name="nome" placeholder="Digite seu nome">
            </div>
            <div class="form-group">
                <label for="apelido">Apelido:</label>
                <input type="text" id="apelido" name="apelido" placeholder="Digite seu apelido">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" placeholder="Digite seu email">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group">
                <label for="cargaHoraria">Carga Horária:</label>
                <input type="number" id="cargaHoraria" name="cargaHoraria" placeholder="Insira a carga horaria">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group">
                <label for="senha">Senha:</label>
                <input type="password" id="senha" name="senha" placeholder="Digite sua senha">
            </div>
        </div>
        <div class="botao">
            <button class="submit-btn">Enviar</button>
        </div>
    </div>
</body>

</html>

<?php ?>