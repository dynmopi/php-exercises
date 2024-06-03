<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipos primitivos em PHP</title>
</head>
<body>
    <h1>Teste de tipos primitivos</h1>
    <?php 
        // 0x = hexadecimal 0b = binário 0 = octal
        /*$num = 0x1A; // 26
        echo "O valor de num é $num";*/

        /*$v = true;
        var_dump($v); // function interna do php para testar o tipo primitivo de alguma variável */

        /*$num = (integer) 3e2; // 3 x 10^2, após colocar (integer), houve a coerção (forçar o tipo primitivo)
        echo "O valor é $num";
        var_dump($num); // Ele retorna como float - isso é do php*/

        /*$num = (float) "950";
        var_dump($num); // retornaria como string, porém, se atente com o float (coerção)*/

        //O tipo real deixou de existir (number)

        /*$casado = false; // o valor no echo é vazio
        //$casado = true; // o valor no echo é 1
        echo "O valor para casado é $casado" */

        /*$vet = [6, 2.5, "Danrley", true, 5];
        var_dump($vet);*/

        class pessoa{ //object no php
            private string $nome; 
        }

        $p = new Pessoa;
        var_dump($p)

        


    ?>
</body>
</html>