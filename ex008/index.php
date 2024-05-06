<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funções Arítiméticas</title>
</head>
<body>
    <h1>Funções Aritméticas</h1>
    <?php
        $num = -40; 
        $abs = abs($num);
        echo "O número é $num. ";
        echo "O valor absoluto é $abs. ";
        $hex = base_convert($num, 10, 16);
        echo "O valor em hexadecimal é $hex. ";
        // ceil, floor, round, hypot, intdiv, min, max, pi
    ?>
</body>
</html>