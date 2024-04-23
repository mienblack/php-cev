<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manipulação de string</title>
</head>
<body>
    <h1>Manipulação de String</h1>
    <?php 
        $nome = "Damien";
        $sobrenome = "Costa \u{1F984}";
        echo "$nome$sobrenome" . '$nome$sobrenome';

        const SP = "São Paulo";
        echo "moro no estado de SP";
        echo "moro no estado de " . SP;
        echo "Estamos no ano de " . date("Y") . "\n";
        
        // Sequências de Escape:
        // \n: nova linha
        // \t: tabulação
        // \\:barra invertida
        // \$: Cifrão
        // /u{}: Codepoint Unicode
        
        $apelido = "Black";
        echo "$nome \"$apelido\" $sobrenome";

        echo <<< TEXTO
            Esse a string de 
                tipo Heredoc
        TEXTO;

        echo <<< 'PALAVRAS'
            String do tipo 
                Nowdoc
        PALAVRAS;
    ?>
</body>
</html>