<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Salário</title>
</head>
<body>
    <?php 
        $s_minimo = 1412;
        $salario = $_GET["salario"] ?? $s_minimo;
    ?>
    <main>
        <h1>Informe o seu salário</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="GET">
            <label for="salario">Salário: </label>
            <input type="number" name="salario" id="salario" value="<?=$dividendo?>" step="0.01">
            <p>Considerando o salário mínimo de <strong>R$<?=number_format($s_minimo, 2, ",", ".")?></strong></p>
            <input type="submit" value="Calcular">
        </form>
    </main>
    <section>
        <h1>Resultado Final</h1>
        <?php 
        echo "Quem recebe um salário de R\$". number_format($salario, 2, ",", ".") ." ganha <strong>". (int)($salario/$s_minimo) ." salários mínimos</strong> + R\$". number_format($salario%$s_minimo, 2, ",", ".") .".";
        ?>
    </section>
</body>
</html>