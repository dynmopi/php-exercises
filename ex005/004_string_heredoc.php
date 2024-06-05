<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        //Strings heredoc não funcionam integralmente no html, eles servem para mostrar na área de textarea do server-side

        $ano = date('Y');
        echo <<< qualquer_coisa
        Posso escrever
            Sem precisar da tabulação
        Sem me preocupar com os breakroles (<br>)
                Só usando o tab
                    No HTML, ficará zuado
                Escrito no ano de $ano 
        qualquer_coisa;
    
    
    ?>
</body>
</html>