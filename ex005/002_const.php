<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>const</title>
</head>
<body>
    <?php 
        const ESTADO = "Pará"; // Com interpretador
        echo "Eu moro no ESTADO <br>"; // Para constantes, apenas double quotes não irá interpretar,
        echo 'Eu moro no ESTADO <br>'; // Também single quotes, não!
        echo "Eu moro no " . ESTADO . "<br>"; // Dessa vez, com concatenação, haverá interpolação da constante.

        echo "Estamos no ano de date('Y') <br>"; //Esse não funciona, pois não há concatenação para a interpolação da função
        echo "Estamos no ano de " . date("Y"); //no Y, funciona tanto com double e single. Há concatenação!
    ?>
</body>
</html>