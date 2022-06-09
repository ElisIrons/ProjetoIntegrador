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
            <img class="imgem"src="bota.png"/>
            <span> <p><a href="botas.php">Bota Coturno </a><br>
            <strong>APENAS R$90,00*</strong> </p></span>
        </div>
          
        <form action=" " method="post">
                <label for="busca">*Consulte o frete</label>
                <input type="search" id="cep" name="frete">
                <button type="submit">&#128269;</button>
        </form>
        
        <footer>
            <I>Loja de Calçados HermeShoes - hermescalçados@gmail.com - 35 99999-9999</I>
        </footer>

    </body>
    </head>
</html>