<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    input{
        display: block;
        margin-bottom: 10px;
    }
</style>
<body>
    <header>
        <h1>
            Médias aritméticas
        </h1>
    </header>
    <main>
    <form action="<?php $_SERVER['PHP_SELF']; ?>" method="get"> <!--lembrando que a global $_SERVER, consulta a array do próprio server. o PHP_SELF é para retroalimentar de forma mais segura. -->
        <section>
            <label for="ival1">1ª valor: </label>
            <input type="number" id="ival1" name="val1" required>

            <label for="ipes1">1ª peso: </label>
            <input type="number" id="ipes1" name="pes1" min="1" required>

            <label for="ival2">2ª valor: </label>
            <input type="number" id="ival2" name="val2" required>

            <label for="ipes2">2ª peso: </label>
            <input type="number" id="ipes2" name="pes2" min="1" required>

            <input type="submit" value="submit">
        </section>
        <div id="script">
            <?php 
            //absorvendo valores
            //parte 1
                $v1 = $_GET['val1'] ?? 0;
                $p1 = $_GET['pes1'] ?? 1;
            //parte 2
                $v2 = $_GET['val2'] ?? 0;
                $p2 = $_GET['pes2'] ?? 1;
            
                $media_simples = ($v1 + $v2)/2;
                $media_ponderada = (($v1 * $p1) + ($v2 * $p2)) / ($p1 + $p2);

                echo "<h2>Analisando os valores $v1 e $v2:</h2>";
                echo "<ul><li>A média aritmética <strong>simples</strong> é de: " . number_format($media_simples, 3, ",") . "</li>";
                echo "<li>A média <strong>ponderada</strong> com os pesos $p1 e $p2 é de: " . number_format($media_ponderada, 3, ",") . " </li></ul>";
            
            
            
            ?>
        </div>
    </form> 
    </main>
</body>
</html>