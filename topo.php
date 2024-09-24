<header>

    <div class="top-bar">
        <a href="#" class="login-btn">Entrar</a>
    </div>

    <div class="logo-container">
        <img src="imagens/HERMES.PNG" title="HermeShoes" alt="HERMESHOES" class="logo" />
        <a href="index.php" style="text-decoration:none">HERMESHOES</a>
        <img src="imagens/hermess.png" title="HermeShoes" alt="HERMESHOES" class="logo" />
    </div>
  
    <nav>
        <ul>
            <li><a href="tudo.php">Todas as categorias</a></li>
            <li><a href="ofertas.php">Ofertas</a></li>
            <li><a href="lançamentos.php">Lançamentos</a></li>
            <li><a href="tenis.php">Tênis</a></li>
            <li><a href="botas.php">Botas</a></li>
            <li><a href="infantil.php">Infantil</a></li>
            <li><a href="cadastro.php">Cadastre-se</a></li>
        </ul>
    </nav>

    <div class="search-container">
        <form id="searchForm" method="post">
            <label for="busca">Buscar:</label>
            <input type="search" id="busca" name="q" placeholder="Digite o nome do produto...">
            <button type="submit">&#128269;</button>
        </form>
    </div>

   
    <div class="login-form-container" id="loginForm">
        <h2>Login</h2>
        <form action="index.php" method="post">
            <label for="username">Usuário:</label>
            <input type="text" id="username" name="username" required>

            <label for="password">Senha:</label>
            <input type="password" id="password" name="password" required>

            <button type="submit">Entrar</button>
        </form>
    </div>
</header>
