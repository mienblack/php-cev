<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 1</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <?php 
        $num = $_GET["num"] ?? 0;
        $opr = $_GET["opr"] ?? 1;
      
        switch($opr) {
            case 1:
                $result = $num * 2;
                break;
            case 2:
                $result = $num ** 3;
                break;
            case 3:
                $result = $num ** (1/2);
        }
        echo "<span class='display-5'>O resultado da operação desejada é <strong>$result</strong></span>"
    ?>
</body>
</html>