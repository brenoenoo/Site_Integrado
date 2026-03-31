<header>
    <div class="menu-top">
        <div class="header-logo">
            <a href="index.php">BL<span>V</span>CKOUT</a>
        </div>

        <nav class="menu">
            <ul class="options">
            <li><a href="index.php">Home</a></li>
            <li><a href="#">Categorias</a></li>
            <li><a href="#carrossel">Marcas</a></li>
            <li><a href="#">Contato</a></li>
            </ul>
        </nav>

        <div class="actions">
            <form action="/buscar" method="get" class="search-box">
            <input type="text" name="q" placeholder="Buscar produtos..." />
            <button type="submit">Buscar</button>
            </form>
            <span class="icon"><i class="bi bi-person-fill"></i>
            <?php
            echo $nome
            ?></span>
            <span class="icon"><a href="#"><i class="bi bi-cart4"></i></a></span>
        </div>
    </div>
</header>