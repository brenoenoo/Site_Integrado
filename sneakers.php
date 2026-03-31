<?php
include 'data.php';
// print '<pre>';
// print_r($produtos_base);
?>

<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="CSS/sneakers.css" />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css"
    />
    <title><?php echo $nome_loja ?></title>
  </head>
  <body>
    <?php require "./partials/header.php"; ?>

    <main class="products-section">
      <div class="products-title-container"></div>
      <h2 class="products-title">SNEAKERS</h2>
      <nav class="products-categories">
        <a href="#">Todos</a>
        <?php
          foreach($categorias as $kcat =>$vcat) {
            print '<a href="#' . $kcat . '">' . $vcat . '</a>';
          }
        ?>
      </nav>

      <div class="products-grid">
        <?php
          foreach($produtos_base as $produto) {
            print '
            <div class="product-card">
              <div class="product-image">
                <a href="nike95.php">
                  <img src="'. $produto['imagem'] .'" class="img-default" />
                  <img src="'. $produto['imagem_2'] .'" class="img-hover" />
                </a>
              </div>
              <p class="product-name">'. $produto['nome'] .'</p>
              <span class="price">R$ '. $produto['preco'] .'</span>
          </div>';
          }
        ?>
      </div>
    </main>

    <?php require "./partials/footer.php"; ?>
  </body>
</html>
