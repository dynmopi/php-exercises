<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversor de moedas</title>
    <link rel="stylesheet" href="style/style.css">
</head>
<body>
    <header>
        <h1>Conversor de moedas fixa</h1>
    </header>
    <main>
        <section>
            <form>
                <?php 
                    $real =  $_GET["num"];
                    $cotacao = round(5.30, 2);
                    $dolar = round(($real / $cotacao), 2);

                    $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);



                    echo "<p>Seus " . numfmt_format_currency($padrao, $real, "BRL") . " equivalem a " . numfmt_format_currency($padrao, $dolar, "USD") . "<br>";
                    echo "<p>Valor da cotação " . numfmt_format_currency($padrao, $cotacao, "USD" . "</p>");
                
                ?>
            </form>
            <p><a href="javascript:history.go(-1)">Voltar</a></p>
        </section>
    </main>
</body>
</html>