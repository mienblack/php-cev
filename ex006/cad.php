<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
<header>
    <h1>Resultado do processamento</h1>
</header>
<main>
    <?php
    $nome = $_GET["nome"] ?? "";
    $sobrenome = $_GET["sobrenome"] ?? "desconhecido";
    echo "É um prazer te conhecer, <strong>$nome $sobrenome</strong>! Esse é o meu site!";
    // var_dump($_GET); // As variáveis globais são $_GET, $_POST, $_COOKIES e $_REQUEST é a junção das 3 primeiras
    ?>
    <p><a href="javascript:history.go(-1)">Voltar para a página anterior</a></p>
</main>
</body>
</html>