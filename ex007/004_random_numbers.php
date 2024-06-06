<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        $min = 0;
        $max = 100;

        $num = mt_rand($min, $max);

        /*  rand() = 1951 - Linear Congretial Generator
            mt_rand() - Mersenne Twister
            A partir do PHP 7.1, o mt_rand() é uma evolução de rand()
            random_int() mesmo princípo, porém, com criptografia (processo lento)
        */

        echo "$num"; // mostra o numero gerado aleatoriamente
    ?>
</body>
</html>