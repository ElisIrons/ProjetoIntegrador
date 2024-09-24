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

        <section class="form-container">
    <h2>Dados Cadastrais</h2>
    <form id="cadastroForm" action="dados_recebidos.php" method="post">
        <div>
            <label for="nome">Nome completo:</label>
            <input type="text" name="nome" id="nome">
        </div>
        
        <div>
            <label for="email">E-mail:</label>
            <input type="text" name="email" id="email">
        </div>

        <div>
            <label for="senha">Senha:</label>
            <input type="password" name="senha" id="senha">
        </div>

        <div>
            <label for="data">Data de nascimento:</label>
            <input type="date" name="data" id="data">
        </div>

        <div>
            <label for="sexo">Sexo:</label>
            <input type="radio" name="sexo" value="F" id="feminino">Feminino
            <input type="radio" name="sexo" value="M" id="masculino">Masculino
        </div>

        <div>
            <label for="estado">Estado:</label>
            <select name="estado" id="estado">
                <option value="ES">Espírito Santo</option>
                <option value="MG">Minas Gerais</option>
                <option value="RJ">Rio de Janeiro</option>
                <option value="SP">São Paulo</option>
            </select>
        </div>

        <div>
            <label for="CEP">CEP:</label>
            <input type="tel" name="CEP" id="CEP">
        </div>

        <button type="submit">Cadastrar</button>
    </form>
</section>
            
        <footer>
            <i>Loja de Calçados HermeShoes - hermescalcados@gmail.com - 35 99999-9999</i>
        </footer>

    </body>
    </head>
</html>