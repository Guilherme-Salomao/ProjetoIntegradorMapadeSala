<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página de Login - Senac Araçatuba</title>
    <link rel="stylesheet" href="../../../assets/css/login.css">

   
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
</head>
<body>
    <header>
        <div class="header-container">
            <img src="../../../assets/images/Senac_logo.svg.png" alt="Logo Senac" class="logo">
            <h2>Senac Araçatuba</h2>
        </div>
        
    </header>
    
    <main class="login-container">
        <div class="login-box">
            <h3>Faça seu <span class="highlight">login</span></h3>
            <form>
                <label for="email">E-mail</label>
                <input type="email" id="email" placeholder="Digite seu email" required>

                <label for="password">Senha</label>
                <input type="password" id="password" placeholder="Digite sua senha" required>

                <button type="submit" class="btn-primary">Acessar</button>
                <button type="button" class="btn-secondary">Cadastra-se</button>

                <a href="#" class="forgot-password">Esqueci minha senha</a>
            </form>
        </div>
    </main>
</body>
</html>
