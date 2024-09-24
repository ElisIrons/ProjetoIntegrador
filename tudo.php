<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Loja de Calçados HermeShoes</title>
        <link rel='stylesheet' href="estilohermes.css" type="text/css">
        <link rel="icon" href="img/favicon.ico">
    </head>
    <body>
        
        <header> 
         
        <?php
            include("topo.php")
        ?>
        
        </header>

        <div class="boxes-container">
    <div class="box">
        <img src="imagens/tenis.png" alt="Tênis Nike Revolution">
        <p><a href="tenis.php">Tênis Nike Revolution 6 Next Nature Masculino</a><br>
        <strong>APENAS R$230,00*</strong></p>
    </div>

    <div class="box">
        <img src="imagens/bota.png" alt="Bota Coturno">
        <p><a href="botas.php">Bota Coturno</a><br>
        <strong>APENAS R$90,00*</strong></p>
    </div>

    <div class="box">
        <img src="imagens/infantil.png" alt="Tênis com Luz de Led Infantil">
        <p><a href="infantil.php">Tênis com Luz de Led Infantil</a><br>
        <strong>APENAS R$84,90*</strong></p>
    </div>

    <div class="box">
        <img src="imagens/feminino.png" alt="Tênis Adidas Breaknet Feminino">
        <p><a href="ofertas.php">Tênis Adidas Breaknet Feminino com 30% de desconto!</a><br>
        <strong>APENAS R$194,90*</strong></p>
    </div>

    <div class="box">
        <img src="imagens/nike.png" alt="Tênis Nike Revolution 6 Next Nature">
        <p><a href="lançamentos.php">Tênis Nike Revolution 6 Next Nature</a><br>
        <strong>APENAS R$249,90*</strong></p>
    </div>
</div>




        <div class="container">
            <h1>Calcular Frete</h1>
            <form id="freteForm">
                <label for="cep">Digite seu CEP:</label>
                <input type="text" id="cep" name="cep" required>
                <button type="submit">Calcular</button>
            </form>
            <div class="result" id="resultadoFrete"></div>
        </div>

        <footer>
            <i>Loja de Calçados HermeShoes - hermescalcados@gmail.com - 35 99999-9999</i>
        </footer>
        <script src="script.js"></script>

    </body>
    </head>
</html>