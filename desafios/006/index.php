<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Anatomia de uma Divisão</title>
</head>
<body>
    <?php 
        $dividendo = $_GET["dividendo"] ?? 0;
        $divisor = $_GET["divisor"] ?? 1;
    ?>
    <main>
        <h1>Anatomia de uma divisão</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="GET">
            <label for="dividendo">Dividendo: </label>
            <input type="number" name="dividendo" id="dividendo" value="<?=$dividendo?>">
            <label for="divisor">Divisor: </label>
            <input type="number" name="divisor" id="divisor" value="<?=$divisor?>">
            <input type="submit" value="Dividir">
        </form>
    </main>
    <section>
        <h1>Estrutura da Divisão</h1>
        <?php 
            //dividendo
            echo "<span>$dividendo     </span>";
            //divisor
            echo "<span>$divisor</span><br>";
            //resto
            echo "<span>". $dividendo%$divisor ."         </span>";
            //quociente
            echo "<span>". (int)($dividendo/$divisor)."</span>";
        ?>
    </section>
</body>
</html>