<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desfio 003</title>
</head>
<body>
    <h1>Conversor de moedas v1.0</h1>
    <?php 
        $valor_real = $_GET["valor"] ?? 0;
        $cotacao = 5.13;
        $valor_dolar = $valor_real / $cotacao;
        //$padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);
        echo "Seus R\$". number_format($valor_real, 2, ",", ".") ." equivalem a US\$". number_format($valor_dolar, 2, ",", ".") .".<br>";
        print "Cotação fixa de R$5,13.";
    ?>
</body>
</html>