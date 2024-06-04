<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        //Tem uma diferença bem sútil entre heredoc e nowdoc

        $ano = date('Y');
        echo <<< 'qualquer_coisa' // <-- repare no single quote, antes não havia. Não dá certo no vscode '-'
        Posso escrever
            Sem precisar da tabulação
        Sem me preocupar com os breakroles
                Só usando a tecla_tab
                    O HTML, ficará zuado
                Escrito ano de $an
                o 
        qualquer_coisa;
    
    ?>
</body>
</html>