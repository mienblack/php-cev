<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 2</title>
</head>
<body>
    <?php 
        $nota_1 = $_GET["nota_1"] ?? 0;
        $nota_2 = $_GET["nota_2"] ?? 0;
        $media = ($nota_1 + $nota_2)/2;
        $situacao = "";

        echo "A média entre <strong>$nota_1</strong> e <strong>$nota_2</strong> é <strong>$media</strong><br>";
        if($media >= 6) {
            $situacao = "APROVADO";
        } elseif ($media >= 4 && $media < 6) {
            $situacao = "RECUPERAÇÃO";
        } else {
            $situacao = "REPROVADO";
        }
        echo "Situação do aluno: <strong>$situacao</strong>";
    ?>
</body>
</html>