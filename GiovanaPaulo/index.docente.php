<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página de Login - Senac Araçatuba</title>
    <!-- <link rel="stylesheet" href="docente.css"> -->
   
</head>
<body>
    <header>
        <div class="header-container">
            <img src="img/Senac_logo.svg.png" alt="Logo Senac" class="logo">
            <h2>Senac Araçatuba</h2>
        </div>
        
    </header>
    
    <main class="login-container">
        <div class="login-box">
            <h3>Faça seu <span class="highlight">login</span></h3>
            <form>
                <label for="email">E-mail Profissional</label>
                <input type="email" id="email" placeholder="Digite seu email" required>

                <label for="password">Nova Senha</label>
                <input type="password" id="password" placeholder="Digite sua nova senha" required>
                <label for="password2">Confirmar Senha</label>
                <input type="password2" id="password2" placeholder="Confirme sua senha" required>

                <button type="submit" class="btn-primary">Criar</button>
               
            </form>
        </div>
    </main>
</body>
</html>

