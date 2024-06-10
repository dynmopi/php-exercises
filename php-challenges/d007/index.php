<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <header>
        <h1>Preencha o seu salário</h1>
    </header>
    <main>
        <form action="<?php $_SERVER['PHP_SELF']; ?>" method="get">
            <section>
                <label for="inum">Salário R$: </label>
                <input type="number" id="inum" name="num">
                <input type="submit" value="Enviar">
            </section>
            <section>
                <?php  
                  $num = $_GET["num"] ?? 0;
                  $salario_min = 1412;
  
                  echo "Considerando o salário mínimo de $salario_min";
              
                ?>
            </section>
        </form>
        <div id="res">
        <?php 
                $qntd = $num / 1412;
                $sobra = $num % 1412;

                echo "<h1>Resultado final</h1>";

                $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);

                echo "<p>Quem recebe o salário de $num, recebe ". round($qntd) . " salários mínimos + " . numfmt_format_currency($padrao, $sobra, "BRL") . "</p>";
            
            ?>
        </div>
    </main>
</body>
</html>