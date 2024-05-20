<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 1</title>
</head>
<body>
    <?php 
        $ano = $_GET["ano"];
        $idade = date("Y") - $ano;
  
        echo "Sua idade é $idade, logo<br>";
        if($idade<=16) {
            echo "Não pode votar e nem dirigir.";
        } elseif ($idade <= 18) {
            echo "Pode votar opcionalmente, mas não dirigir.";
        } elseif ($idade < 65) {
            echo "Pode votar obrigatoriamente e dirigir.";
        } else {
            echo "Pode votar opcionalmente e dirigir.";
        }
    ?>
</body>
</html>