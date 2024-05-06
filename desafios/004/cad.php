<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desfio 004</title>
</head>
<body>
    <h1>Conversor de moedas v2.0</h1>
    <?php 
        $valor_real = $_GET["valor"] ?? 0;

        $inicio = date("m-d-Y", strtotime("-7 days"));
        $fim = date("m-d-Y");
        $url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\'04-29-2024\'&@dataFinalCotacao=\'05-06-2024\'&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra';

        $dados = json_decode(file_get_contents($url), true);
        $cotacao = $dados["value"][0]["cotacaoCompra"];

        $valor_dolar = $valor_real / $cotacao;
        //$padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);
        echo "Seus R\$ ". number_format($valor_real, 2, ",", ".") ." equivalem a US\$ ". number_format($valor_dolar, 2, ",", ".") .".<br>";
        echo "Cotação fixa de R\$ ". number_format($cotacao, 2, ",", ".") ."";
    ?>
</body>
</html>