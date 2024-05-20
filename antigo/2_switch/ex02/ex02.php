<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 2</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body class="d-flex flex-column gap-3 align-items-center">
    <?php 
        $ds = $_GET["ds"] ?? 0;
      
        switch($ds) {
            case 2:
            case 3:
            case 4:
            case 5:
            case 6:
                echo "<span class='display-5'>Hoje é dia de estudar</span>";
                break;
            case 7:
            case 1:
                echo "<span class='display-5'>Hoje é dia de descansar</span>";
                break;
            default:
                echo "<span class='display-4 t-danger'>Dia da semana inválido</span>";
        }
    ?>
    <a class="btn btn-info text-light w-25" href="javascript:history.go(-1)">Voltar</a>
</body>
</html>