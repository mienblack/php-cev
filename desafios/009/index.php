<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Médias</title>
</head>
<body>
    <?php 
        $valor_1 = $_GET["valor_1"] ?? 0;
        $peso_1 = $_GET["peso_1"] ?? 1;
        $valor_2 = $_GET["valor_2"] ?? 0;
        $peso_2 = $_GET["peso_2"] ?? 1;
    ?>
    <main>
        <h1>Média Aritméticas</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="GET">
            <label for="valor_1">Valor 1: </label>
            <input type="number" name="valor_1" id="valor_1" value="<?=$valor_1?>">
            <label for="peso_1">Peso 1: </label>
            <input type="number" name="peso_1" id="peso_1" value="<?=$peso_1?>">
            <label for="valor_2">Valor 2: </label>
            <input type="number" name="valor_2" id="valor_2" value="<?=$valor_2?>">
            <label for="peso_2">Peso 2: </label>
            <input type="number" name="peso_2" id="peso_2" value="<?=$peso_2?>">
            <input type="submit" value="Calcular Médias">
        </form>
    </main>
    <section>
        <h1>Resultado Final</h1>
        <?php 
        echo "Analisando os valores <strong>$valor_1</strong> e <strong>$valor_2</strong>:<br>";
        echo "<ul>
                <li>A <strong>Média Aritmética Simples</strong> entre os valores é igual a <strong>". ($valor_1+$valor_2)/2 ."</strong>.</li>
                <li>A <strong>Média Aritmética Ponderada</strong> com pesos $peso_1 e $peso_2 é igual a <strong>". ($valor_1*$peso_1
                +$valor_2*$peso_2)/($peso_1+$peso_2) ."</strong>.</li>
            </ul>"
        ?>
    </section>
</body>
</html>