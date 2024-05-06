<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desfio 002</title>
</head>
<body>
    <h1>Gerando Números Aleatórios</h1>
    <p>Gerando um número aleatório entre 0 e 100.</p>
    <?php 
        $random = rand(0, 100);
        echo "O valor aleatório gerado foi $random";
    ?>
    <button onclick="javascript:document.location.reload()">Gerar Outro</button>
</body>
</html>