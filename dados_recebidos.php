<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Dados Cadastrais</title>
    </head>
    <body>

        <div id='corpo'>
            <main>
                <h1> Dados cadastrados</h1>
                
                <?php

                    $nome = $_POST['nome'];
                    $email = $_POST['email'];
                    $data = $_POST['data'];
                    $sexo = $_POST['sexo'];
                    $estado = $_POST['estado'];
                    $CEP = $_POST['CEP'];

                    echo "Nome: " . $nome . "<br>";
                    echo "E-mail: " . $email . "<br>";
                    echo "Data de nascimento: " . $data . "<br>";
                    echo "Sexo: " . $sexo . "<br>";
                    echo "Estado: " . $estado . "<br>";
                    echo "CEP: " . $CEP . "<br>"
            
                ?>

        <BR>
        
                <strong> Em breve você receberá um e-mail de confirmação de cadastro juntamente com o cupom de 50% de desconto para utilizar na sua primeira comprar!</strong>

            </main>
        </div> 




    </body>
</html>