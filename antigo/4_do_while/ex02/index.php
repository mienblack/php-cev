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
    $c = 1;
        while ($c <= 5) {
            echo "
                <div>
                    <label for='v$c' class='form-label'></label>Valor $c:</label>
                    <input type='number' name='v$c' id='v$c' min='0' max='100' class='form-control'>
                </div>
                ";
            $c++;
        }
    ?>
    <input type="submit" class="btn btn-primary">
</body>
</html>