<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="CSS/cadastro.css" />
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

    <main class="cadastro-section">
      <div class="cadastro-container">
        <div class="login-card">
          <div class="login-txt">
            <h2>Já tem uma conta? Entre agora!</h2>
            <p>Entre na sua conta para aproveitar todo o nosso site!</p>
          </div>

          <a href="login.php" class="login-btn"><button>Log-in</button></a>
        </div>

        <div class="cadastro-card">
          <h2>Cadastro</h2>

          <form action="./cadastro_recebe.php" method="POST">
            <div class="input-box">
              <input type="text" name="nome" required />
              <label>Nome</label>
            </div>

            <div class="input-box">
              <input type="email" name="email" required />
              <label>Email</label>
            </div>

            <div class="input-box">
              <input type="password" name="senha" required />
              <label>Senha</label>
            </div>

            <button type="submit" class="btn-cadastro">Criar conta</button>
          </form>
        </div>
      </div>
    </main>

    <?php
      require "./partials/footer.php";
    ?>

  </body>
</html>
