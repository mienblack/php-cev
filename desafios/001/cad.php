<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desfio 001</title>
</head>
<body>
    <h1>Resultado Final</h1>
    <?php 
        $num = $_GET["num"] ?? 0;
        echo "O número escolhido foi $num. <br>";
        $ant = $num - 1;
        echo "Seu antecessor é $ant. <br>";
        $sus = $num + 1;
        echo "Seu sucessor é $sus.<br>"
    ?>
    <button onclick="javascript:history.go(-1)">Voltar</button>
</body>
</html>