<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Cadastro</title>
</head>
<body>
    <header>
        <h1>Usuario Cadastrado</h1>
        <main>
            <?php 
                $nome = $_GET["nome"];
                $sobrenome = $_GET["sobrenome"];

                //echo "<p> bem vindo ao site $nome $sobrenome</p>";

                if(isset($_GET["nome"])){
                    echo "<p> bem vindo ao site $nome $sobrenome</p>";
                }

                if($nome == null || $sobrenome == null){
                    echo "Não foram preenchidos todos os campos do formulario";
                }
            ?>
            <p><a href="javascript:history.go(-1)">Voltar para a pagina anterior</a></p>
        </main>
    </header>
    
</body>
</html>