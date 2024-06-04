<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>005</title>
</head>
<body>
    <?php 
    //Cuidado com os single quote e double quotes
    //O single quote não interpreta a string
    // o double quotes interpreta a string
    //Há diferença desses dois termos mencionados, no contexto das variáveis!!

        $nome = 'Danrley';
        $sobrenome_sem_emoji = 'Maranhão \u{1F50B}';
        $sobrenome_com_emoji = "Maranhão \u{1F50B}";

        echo '$nome $sobrenome <br>'; //não vai interpretar
        echo "$nome $sobrenome_sem_emoji <br>"; //vai interpretar mas não com o emoji
        echo "$nome $sobrenome_com_emoji <br>"; //vai interpretar

        
    
    ?>
</body>
</html>