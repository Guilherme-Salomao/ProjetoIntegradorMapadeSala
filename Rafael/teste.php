<?php ?>

<html lang="pt-br">

<head>

    <title>Formulário de Contato</title>
    <link rel="stylesheet" href="cadDocente.css">
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            background-color: #e0e0e0;
            margin: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: flex-start;
            min-height: 100vh;
        }

        header {
            width: 100%;
            background-color: #fff;
            border-bottom: 4px solid #f7931e;
            padding: 10px 0;
            text-align: center;
            margin-bottom: 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .header-container {
            display: flex;
            align-items: center;
            justify-content: flex-start;
            margin-left: 20px;
        }

        .logo {
            height: 50px;
            margin-right: 10px;
        }

        h2 {
            color: #0056b3;
        }

        .container {
            background-color: #fff;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 600px;
            margin: 0 15px;
        }

        .container h1 {
            margin-bottom: 20px;
            font-size: 28px;
            text-align: center;
        }

        .form-group {
            display: flex;
            flex-direction: column;
            margin-bottom: 20px;
        }

        .form-group label {
            margin-bottom: 5px;
            font-weight: bold;
        }

        .form-group input {
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        .form-group input:focus {
            border-color: #007bff;
            outline: none;
        }

        .form-row {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            margin-bottom: 20px;
        }

        .form-row .form-group {
            flex: 1;
            margin-right: 10px;
        }

        .form-row .form-group:last-child {
            margin-right: 0;
        }

        .form-row .form-group:nth-child(2) {
            margin-right: 0;
        }

        .submit-btn {
            width: 100%;
            padding: 12px;
            background-color: #007bff;
            border: none;
            border-radius: 4px;
            color: #fff;
            font-size: 18px;
            cursor: pointer;
        }

        .submit-btn:hover {
            background-color: #0056b3;
        }

        /* Media Queries */
        @media (max-width: 768px) {
            .form-row .form-group {
                margin-right: 0;
                margin-bottom: 15px;
            }

            .container {
                padding: 20px;
            }

            .submit-btn {
                font-size: 16px;
            }
        }

        @media (max-width: 480px) {
            .container h1 {
                font-size: 24px;
            }

            .form-row {
                flex-direction: column;
            }

            .form-group input {
                padding: 8px;
            }
        }
    </style>
</head>

<body>

    <?php
    // Cabeçalho da página
    include 'global/header.php';
    ?>

    <div class="container">
        <h1>Formulário de Contato</h1>

        <!-- Linha 1: Nome e Telefone -->
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

        <!-- Linha 2: Email e Endereço -->
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

        <!-- Linha 3: CPF e Usuário -->
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

        <!-- Linha 4: Senha -->
        <div class="form-row">
            <div class="form-group">
                <label for="senha">Senha:</label>
                <input type="password" id="senha" name="senha" placeholder="Digite sua senha">
            </div>
        </div>

        <!-- Botão de envio -->
        <button class="submit-btn">Enviar</button>
    </div>
</body>

</html>

<?php ?>
