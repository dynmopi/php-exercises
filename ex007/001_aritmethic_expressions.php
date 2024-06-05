<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    /*
        Ordem de precedência, de cima para baixo, da esquerda para direita

        ()
        **
        * / %
        + -
    */
        $res = 50 / 2 + 3 ** 2;
        echo "O resultado é $res <br>"; // resultado = 34
    
        $res_1 = 50 / ( 2 + 3 ) ** 2;
        echo "O resultado da segunda expressão é $res_1"; // resultado = 2
    ?>
</body>
</html>