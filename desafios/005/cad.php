<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desfio 005</title>
</head>
<body>
    <h1>Analisador de Números Reais</h1>
    <?php 
        $valor = $_GET["valor"] ?? "";
        $valor_inteiro = (int) $valor;
        $valor_decimal = $valor - $valor_inteiro;
        echo "Analisando o Númmero ". number_format($valor, 3, ",", ".") ." informado pelo usuário:";
        echo "<ul><li>A parte inteira do número é ". number_format($valor_inteiro, 0, ",", ".") ."</li><li>A parte fracionária do número é 0, <strong>". number_format($valor_decimal, 3, ",", ".") ."</strong></li></ul>";
    ?>
    <button onclick="javascript:history.go(-1)">Voltar</button>
</body>
</html>