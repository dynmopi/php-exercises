<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formatação de moedas</title>
</head>
<body>
    <?php 
        $real = 500; // valor de exemplo
        $cotacao = 5.30; // cotação pesquisada no google no dia 06/06/2024 

        //equivalência do dolar para o real
        $dolar = $real / $cotacao;

        //number_format($ , n,".", ".") -> function que formata o número com as quantidades de casas decimais e pontuações

        /*a concatenação é necessária devido a implementação das functions (number_format) ao longo de toda "string", caso não queira fazer com que apareça as functions, converta-as por meio de variáveis

        $num_real = number_format($real, 2, ",", ".");
        $num_dolar = number_format($dolar, 2, ",", ".");
        
        
        
        echo "Seus R$ $num_real equivalem a US$ $num_dolar"; //-> perceba que não há concatenações.
        
        */

        // echo "Seus R$ " . number_format($real, 2, ",", ".") . " equivalem a US$ " . number_format($dolar, 2, ",", "."); -> fica bem limitado, se comparado com a biblioteca intl

        $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY); //NumberFormatter::CURRENCY, diz que a formatação será específica para moedas. Precisa estar com biblioteca intl ativa

        
 
        echo "Seus " . numfmt_format_currency($padrao, $real, "BRL") . " equivalem a " . numfmt_format_currency($padrao, $dolar, "USD");
        




    ?>
</body>
</html>