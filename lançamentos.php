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

        <?php include("frete.php"); ?>

        <footer>
            <i>Loja de Calçados HermeShoes - hermescalcados@gmail.com - 35 99999-9999</i>
        </footer>
        <script src="script.js"></script>
    </body>
    </head>
</html>