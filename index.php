<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Loja de Calçados HermeShoes</title>
        <link rel="stylesheet" href="estilohermes.css">
        <link rel="icon" href="img/favicon.ico">
    </head>
    <body>
        <header> 
           <?php include("topo.php"); ?>
        </header>

        <p>OS MAIS ACESSADOS NOS ÚLTIMOS DIAS</p>

        <div class="boxes-container">
    <div class="box">
        <img class="imgem" src="imagens/tenis.png" alt="Tênis Nike Revolution">
        <p><a href="tenis.php">Tênis Nike Revolution 6 Next Nature Masculino</a><br>
        <strong>APENAS R$230,00*</strong></p>
    </div>

    <div class="box">
        <img class="imgem" src="imagens/bota.png" alt="Bota Coturno">
        <p><a href="botas.php">Bota Coturno</a><br>
        <strong>APENAS R$90,00*</strong></p>
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
</html>
