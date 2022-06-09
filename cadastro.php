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

        <div id='corpo'>
            <main>
                <h2>Dados Cadastrais</h2>
                <section class="caixa">
            		<fieldset>
                        <legend>Informe os seus dados a seguir:</legend>
            
                <form action ="dados_recebidos.php" method="post">
					
                    <div>

						<label for="nome">Nome completo: </label> <br>
						<input type="text" name="nome" id="nome">
					</div>
            <BR>

                    <div>

                        <label for="email">E-mail: </label> <br>
                        <input type="text" name="email" id="email">
                    </div>

            <BR>
					<div>
						<label for="data">Data de nascimento:</label> <br>
						<input type="date" name="data" id="data"> 
					</div>
		    <BR>
					<div>	
						<label for="sexo">Sexo:</label> <br>
						<input type="radio" name="sexo" value="F" id= "sexo">Feminino<br>
			    		<input type="radio" name="sexo" value="M" id="sexo">Masculino<br>
			    	</div>
            <BR>
					<div>
						<label for="estado">Estado: </label> <br>
						<select name="estado" id = "estado">
                   			<option value="ES">Espírito Santo</option>
                    		<option value="MG">Minas Gerais</option>
                    		<option value="RJ">Rio de Janeiro</option>
							<option value="SP">São Paulo</option>
                        </select>
                    </div>
            <BR>

                    <div>

                        <label for="CEP">CEP: </label> <br>
                        <input type="tel" name="CEP" id="CEP">
                    
                    </div>
				
			<BR>

                <button type="submit">Cadastrar</button>

				</form>
            
			</fieldset>
		</section>
			</main>

          
        <footer>
            <I>Loja de Calçados HermeShoes - hermescalçados@gmail.com - 35 99999-9999</I>
        </footer>

    </body>
    </head>
</html>