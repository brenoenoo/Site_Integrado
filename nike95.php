<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="CSS/nike95.css" />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css"
    />
    <title>Nike Air Max 95 Big Bubble Granite</title>
  </head>
  <body>

    <?php
      require "./partials/header.php";
    ?>

    <main class="prod-main">
        <div class="prod-container">
            <div class="prod-gallery">
                <div class="mini-img">
                    <img src="Imagens/prod1.webp" onclick="trocarImagem(this)">
                    <img src="Imagens/prod6.webp" onclick="trocarImagem(this)">
                </div>

                <div class="main-img">
                    <img src="Imagens/prod1.webp" id="mainImg">
                </div>
            </div>

            <div class="prod-info">
                <p class="indicador"><a href="index.php">Home</a> | <a href="sneakers.php">Sneakers</a></p>

                <h1>Nike Air Max 95 Big Bubble Granite</h1>

                <h2 class="preco">R$ 2.199,99</h2>
                <p class="parcela">ou 4x de R$ 550,00 sem juros</p>

                <div class="section">
                    <p>Cor</p>
                    <div class="color-option"></div>
                </div>

                <div class="section">
                    <div class="size-title">
                        <p>Tamanho</p>
                    </div>

                    <div class="sizes">
                        <button>38</button>
                        <button>39</button>
                        <button>40</button>
                        <button>41</button>
                        <button>42</button>
                    </div>
                </div>

                <button class="btn-buy">ADICIONAR À SACOLA</button>

                <div class="cep-box">
                    <input type="text" placeholder="Digite seu CEP">
                    <button>→</button>
                </div>

                <div class="desc">
                    <p>
                    O Nike Air Max 95 combina estilo icônico com conforto extremo.
                    Seu design em camadas oferece um visual moderno e urbano.
                    </p>

                    <p>
                    Equipado com amortecimento Air visível, proporciona leveza e
                    absorção de impacto para o dia a dia.
                    </p>
                </div>
            </div>
        </div>
    </main>

    <?php
      require "./partials/footer.php";
    ?>

    <script>
        function trocarImagem(el) {
            document.getElementById("main-img").src = el.src;

            document.querySelectorAll(".mini-img img").forEach(img => {
                img.classList.remove("active");
            });

            el.classList.add("active");
        }
    </script>
  </body>
</html>