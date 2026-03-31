<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="CSS/login.css" />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css"
    />
    <title><?php echo $nome_loja ?></title>
  </head>
  <body>

    <?php
      require "./partials/header.php";
    ?>

    <main class="login-section">
        <div class="login-container">
            <div class="login-card">
                <h2>Login</h2>

                <form action="login_recebe.php" method="POST">
                <div class="input-box">
                    <input type="email" name="email" required />
                    <label>Email</label>
                </div>

                <div class="input-box">
                    <input type="password" name="senha" required />
                    <label>Senha</label>
                </div>

                <div class="options-login">
                    <label>
                    <input type="checkbox" /> Lembrar de mim
                    </label>
                    <a href="#">Esqueceu a senha?</a>
                </div>

                <button type="submit" class="btn-login">Entrar</button>
                </form>
            </div>

            <div class="cadastro-card">
                <div class="cadastro-txt">
                    <h2>Não tem uma conta? Crie uma!</h2>
                    <p>Cadastre-se e conheça nossa loja!</p>
                </div>
                
                <a href="cadastro.php" class="cadastro-btn"><button>Cadastre-se</button></a>
            </div>            
        </div>

    </main>

    <?php
      require "./partials/footer.php";
    ?>

  </body>
</html>