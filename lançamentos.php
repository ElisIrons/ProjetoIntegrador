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

        <div class="box">
            <img class="imgem"src="imagens/nike.png"/>
            <span> <p><a href="lançamentos.php">Tênis Nike Revolution 6 Next Nature</a><br>
            <strong>APENAS R$249,90*</strong> </p></span>
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