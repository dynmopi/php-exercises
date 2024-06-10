<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        input{
            display: block;
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
    <header>
        <h1>
            calculadora de idade
        </h1>
    </header>
    <main>
        <form action="<?php $_SERVER['PHP_SELF']?>" method="get">
            <section>
                <label for="iano_nasc">ano de nascimento: </label>
                <input type="number" id="iano_nasc" name="ano_nasc">

                <label for="iano_previsao">ano de previsão: </label>
                <input type="number" id="iano_previsao" name="ano_previsao">
                
                <input type="submit" value="submit">
            </section>
            <div id="script">
                <?php 
                    $ano_nasc = $_GET['ano_nasc'] ?? 0;
                    $ano_previsao = $_GET['ano_previsao'] ?? 0;

                    $idade = $ano_previsao - $ano_nasc;

                    echo "quem nasceu em $ano_nasc terá $idade anos em $ano_previsao";
                
                ?>
            </div>
        </form>
    </main>
</body>
</html>