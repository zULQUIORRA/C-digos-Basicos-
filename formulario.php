<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <!--
            get dados via url
            post - dados ocultos
-->
        <form action="proc.php" method="POST">
            <div>
                <label> Nome:</label>
                <input type="text" id="nome" name="nome"/>
            </div>
            <div>
                <label> Sexo:</label>
                <input type="radio" id="sexo" name="sexo" value="f"/> feminino
                <input type="radio" id="sexo" name="sexo" value="m"/> masculino
            </div>
                 <labe> Senha:</label>
                 <input type="password" id="x" name="senha" />
            <div>
                <input type= "submit" value="Cadastro"/>
            </div>
        </form>
    </body>
</html>