<?php
include 'data.php';
?>

<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="CSS/cadastro_produto.css" />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css"
    />
    <title>BLVCKOUT</title>
  </head>
  <body>
    <?php require "./partials/header.php"; ?>

    <main class="form-section">
        <div class="form-container">
            <h2>Cadastro de Produto</h2>
            <form action="#" method="POST">
                
                <label for="nome">Nome do Produto:</label>
                <input type="text" id="nome" name="nome" class="input" required>

                <label for="preco">Preço:</label>
                <input type="number" id="preco" name="preco" step="0.01" class="input" required>

                <label for="categoria">Categoria:</label>
                <select id="categoria" name="categoria" required>
                    <option value="">Selecione</option>
                    <option value="nike">Nike</option>
                    <option value="jordan">Jordan</option>
                    <option value="adidas">Adidas</option>
                    <option value="new_balance">New Balance</option>
                    <option value="asics">Asics</option>
                    <option value="bape">Bape</option>
                    <option value="louis_vuitton">Louis Vuitton</option>
                    <option value="outro">Outro</option>
                </select>

                <label>Foto do Produto:</label>
                <div class="upload-box">
                    <span class="upload-text">Clique ou arraste uma imagem aqui</span>
                    <input type="file" id="foto" name="foto" accept="image/*" required onchange="previewImage(event)">
                </div>

                <div class="preview" id="preview">
                    <img id="previewImg" src="" alt="Preview">
                </div>

                <button type="submit" class="submit-btn">Cadastrar</button>
            </form>
        </div>
    </main>

    <?php require "./partials/footer.php"; ?>

    <script>
        function previewImage(event) {
            const file = event.target.files[0];
            if (file) {
            const reader = new FileReader();
            reader.onload = function(e) {
                const img = document.getElementById('previewImg');
                img.src = e.target.result;
                document.getElementById('preview').style.display = 'block';
            };
            reader.readAsDataURL(file);
            }
        }
    </script>
  </body>
</html>