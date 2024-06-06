<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style/style.css">
</head>
<body>
    <header>
        <h1>Conversor de moedas 2.0v    </h1>
    </header>
<main>
    <section>
        <form>
            <?php
            //Daqui
            $inicio = date('m-d-Y', strtotime("-7 days"));
            $fim = date("m-d-Y");
                $url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\''. $inicio . '\'&@dataFinalCotacao=\''. $fim .'\'&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao';

                $dados = json_decode(file_get_contents($url), true);

                $cotacao = $dados["value"][0]["cotacaoCompra"];
            //Até aqui, o algorítmo puxa a api do banco central para consultar o valor do USD
            
                $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);

                $real =  $_GET["num"];
                $dolar = round(($real / $cotacao), 2);


                echo "<p>Seus " . numfmt_format_currency($padrao, $real, "BRL") . " equivalem a " . numfmt_format_currency($padrao, $dolar, "USD") . "<br>";

                echo "<p>A cotação foi de $cotacao</p>";



            ?>
        </form>
        <p><a href="javascript:history.go(-1)">Voltar</a></p>
    </section>
</main>
</body>
</html>