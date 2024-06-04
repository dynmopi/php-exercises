<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        $nome = "Danrley";
        $sobrenome = "Maranhão";
        $apelido = "Dynmopi";

    //possibilidades para as sequencias de escape

        echo "$nome $apelido $sobrenome <br>";
        echo "$nome '$apelido' $sobrenome <br>";
        // echo "$nome "$apelido" $sobrenome"; cuidado com a mixagem de dois double quotes ou single quotes numa mesma linha!
        echo "$nome \"$apelido\" $sobrenome <br>";
        echo "$nome " .$apelido. "$sobrenome <br>"; //concatenação, normal.

    //sequencias de escape
    /*
    
        \n -> nova linha (<br> do php)
        \t -> tabulação horizontal
        \\ barra invertida
        \$ sinal de cifrão
        \u{} codepoint unicode (emoji)

    */
    ?>
</body>
</html>