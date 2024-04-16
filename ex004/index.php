<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipos Primitivos</title>
</head>
<body>
    <h1>Tipos Primitivos</h1>
    <?php 
        // Escalares: string, integer, float, boolean
        // Compostos: array, object
        // Especiais: null, resource, callabe, mixed

        // 0x = hexadecimal; 0b = binário; 0 = octal;

        $string = "String";
        $integer = 22; 
        $float = 33.3;
        $boolean = false;

        echo "O valor é $integer";

        $num = 0x6a;
        $pot = (integer) 2e3;
        $casado = true;
        var_dump($num, $pot);
        echo "O valor de casado  é $casado" // 1 se verdade e "" se falso
    ?>
</body>
</html>