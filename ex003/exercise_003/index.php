<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>
    <h1>Exemplo de PHP</h1>
    <?php 
        date_default_timezone_set("America/Sao_Paulo"); // Serve para configurar a timezone escolhida, a padrão é a CET = Center European Time UTC+1
        echo "Hoje é dia " . date("d/M/Y T") . " e a hora é " . date("G:i:s"); // d minúsculo e Maiúsculo imprimem coisas diferentes. G = hora, i = minuto e s = segundo

    ?>
</body>
</html>