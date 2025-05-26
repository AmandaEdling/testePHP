<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <?php 
    include("./Forms.php");
    echo "<hr>";
    include_once("./Forms.php");
    ?>
    <h1>Informe seus dados</h1>
    <section>
        <form action="cadastro.php" method="GET">
            <label for="nome">Nome</label>
            <input type="text" placeholder="Digite seu nome" name="nome" id="nome">

            <label for="sobrenome">Sobrenome</label>
            <input type="text" placeholder="Digite seu sobrenome" name="sobrenome">
            <input type="submit" value="Enviar">
        </form>
    </section>
    
</body>
</html>