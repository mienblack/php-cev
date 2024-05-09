<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Informe um  número</title>
</head>
<body>
    <?php 
        $num = $_GET["num"] ?? 1;
    ?>
    <main>
        <h1>Informe um número</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="GET">
            <label for="num">Número: </label>
            <input type="number" name="num" id="num" value="<?=$num?>">
            <input type="submit" value="Calcular Raízes">
        </form>
    </main>
    <section>
        <h1>Resultado Final</h1>
        <?php 
        echo "Analisando o <strong>número $num</strong>, temos:<br>";
        echo "<ul>
                <li>A sua raíz quadrada é <strong>". number_format($num**(1/2), 4, ",", ".") ."</strong></li>
                <li>A sua raíz cúbica é <strong>". number_format($num**(1/3), 4, ",", ".") ."</strong></li>
            </ul>"
        ?>
    </section>
</body>
</html>