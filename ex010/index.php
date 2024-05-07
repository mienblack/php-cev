<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulários retroalimentados</title>
</head>
<body>
    <?php 
        // Capturando os dados do formulário
        $valor_1 = $_GET['v1'] ?? 0;
        $valor_2 = $_GET['v2'] ?? 0;
    ?>
    <main>
        <h1>Somador de Valores</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="">
            <label for="v1">Valor 1: </label>
            <input type="number" name="v1" id="v1" value="<?=$valor_1?>">
            <label for="v2">Valor 2: </label>
            <input type="number" name="v2" id="v2" value="<?=$valor_2?>">
            <input type="submit" value="Somar">
        </form>
    </main>
    <section id="resultado">
        <h2>Resultado da Soma</h2>
        <?php 
            $soma = $valor_1 + $valor_2;
            print "A soma dos valores $valor_1 e $valor_2 é $soma."
        ?>
    </section>
</body>
</html>