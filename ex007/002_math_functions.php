<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>math_functions</title>
</head>
<body>
    <?php 
    /*abs() valor absoluto (módulo da matematica)
      base_convert() conversor de bases numéricas
    */
    $r = abs(-1000);
    echo "A resposta é $r <br>"; // mostra 2000

    $conv = base_convert(198, 10, 8); // sintaxe (nº para ser convertido, base dela, para base final)
    echo "A conversão é $conv <br>"; // mostra 306

    $conv_1 = base_convert(198, 10, 2);
    echo "A segunda conversão é de $conv_1 <br>"; // mostra 11000110

    $arrend = intdiv(5, 2); // divisão inteira
    echo "A divisão é $arrend <br>"; // mostra 2 e não 2.5

    $arrend_1 = ceil(5.5); // arrendondamento acrescido
    echo "O arrendondamento é $arrend_1 <br>"; // o valor preenchido é 5.5, e o valor arredondado é 6

    $arrend_2 = floor(5.5); // arrendondamento decrescido
    echo "O segundo arrendondamento é $arrend_2 <br>"; // o mesmo exemplo de cima, e o valor arredondado é 5

    $arrend_3 = round(5.45631417); // arrendondamento aritmético normal
    echo "O terceiro arrendondamento é $arrend_3 <br>"; // mostra 5

    $hipotenusa = hypot(6, 8); //Calcula a hipotenusa caso coloque os falores dos catetos
    echo "O valor da hipotenusa é $hipotenusa <br>"; // retornará 10

    $minimo = min(5, 2, 3, 1, 0, 9); // faz uma comparação entre os valores digitados para saber do menor valor
    echo "O menor valor é $minimo<br>";

    $maximo = max(5, 2, 3, 1, 0, 9); // faz uma comparação entre os valores digitados para saber do maior valor
    echo "O maior valor é $maximo<br>";

    $valor_pi = pi(); // é uma função que mostra o valor de pi
    echo "O valor de pi é $valor_pi <br>";
    $valor_pi_2 = M_PI; // dessa vez é por constante já declarada no PHP
    echo "Dessa vez é por constante. O valor de pi é $valor_pi_2 <br>";

    $potencia = pow(2, 5); // O php antigo, utilizava dessa função matemática para calcular as potências, visto que não é possível utilizar o ** antigamente. Caso utilize, você perde a ordem de precedência
    echo "O resultado dessa exponenciação é $potencia<br>";

    $raiz_quadrada = sqrt(49); // Função que calcula a raíz quadrada
    echo "O resultado dessa raíz quadrada é de $raiz_quadrada <br>";

    $raiz_quadrada_2 = 49 ** (1/2); // Uma outra forma de calcular a raíz quadrada, é utilizar os conceitos de expoente fracionário. O bom desse método, é a possibilidade de calcular as raízes de quaisquer índices: 81 ** (1/3)
    echo "O resultado dessa raíz quadrada, usando o expoente fracionário, é de $raiz_quadrada_2 <br>";

    ?>

    
</body>
</html>