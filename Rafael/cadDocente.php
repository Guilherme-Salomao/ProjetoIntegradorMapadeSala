<?php ?>

<html lang="pt-br">

<head>

    <title>Formulário de Contato</title>
    <link rel="stylesheet" href="cadDocente.css">

</head>

<body>

    <?php
    // Cabeçalho da página
    include 'global/header.php';
    ?>

    <div class="container">
        <h1>Formulário de Contato</h1>

        <div class="form-row">
            <div class="form-group">
                <label for="nome">Nome:</label>
                <input type="text" id="nome" name="nome" placeholder="Digite seu nome">
            </div>
            <div class="form-group">
                <label for="telefone">Telefone:</label>
                <input type="text" id="telefone" name="telefone" placeholder="Digite seu telefone">
            </div>
        </div>

        <div class="form-row">
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" placeholder="Digite seu email">
            </div>
            <div class="form-group">
                <label for="endereco">Endereço:</label>
                <input type="text" id="endereco" name="endereco" placeholder="Digite seu endereço">
            </div>
        </div>

        <div class="form-row">
            <div class="form-group">
                <label for="cpf">CPF:</label>
                <input type="text" id="cpf" name="cpf" placeholder="Digite seu CPF">
            </div>
            <div class="form-group">
                <label for="usuario">Usuário:</label>
                <input type="text" id="usuario" name="usuario" placeholder="Digite seu usuário">
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