<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variáveis e constantes</title>
</head>
<body>
    <h1>Variáveis e Constantes</h1>
    <?php 
        $nome = "Damien";
        $sobrenome = "Costa";
        const PAIS = "Brasil";
        $idade = 21;
        $peso = 66;
        

        echo "Muito prazer, $nome $sobrenome! Você mora no ". PAIS ;

        // 1. Tente dar nomes  claros e de fácil identificação
        // 2. Evite nomes muito curtos ou muito longos
        // 3. Defina um padrão e siga em todo projeto
        // 4. Para variáveis dê preferência a letras minusculas
        // 5. Para constantes dê preferência a letras maiúsculas
        // 6. Use camelCase para métodos e atributos
        // 7. Use SNAKE_CASE para nomear constantes

        $nomeCompletoCliente = "Pedro Camel Case";
        const SNAKE_CASE = "SNAKE_CASE";
    ?>
</body>
</html>