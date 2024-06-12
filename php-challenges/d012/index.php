<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <header>
        <h1>Calculadora de tempo</h1>
    </header>
    <main>
        <section>
            <form action="<?= $_SERVER['PHP_SELF']?>" method="get">
                <label for="iseg">qual é o total de segundos? </label>
                <input type="number" id="iseg" name="seg" required>
                <input type="submit" value="submit">
                <?php 
                    // 1min -> 60s
                    // 1h -> 60min -> 3600s
                    // 1d -> 24h -> 1400min -> 86400s
                    // 1sem -> 7d -> 168h -> 10080min -> 604400s

                    $seg = $_GET['seg'] ?? 0;

                    $sem = $seg / 604800;
                    $sem_res = $seg % 604800;

                    $dias = $sem_res / 86400;
                    $dias_res = $sem_res % 86400;

                    $horas = $dias_res / 3600;
                    $horas_res = $dias_res % 3600;

                    $min = $horas_res / 60;
                    $min_res = $horas_res % 60;

                    $seg_finais = $min_res;

                    echo "<h2>totalizando: </h2>";

                    echo "<p>analisando o valor digitado, <strong>". number_format($seg, 0, ",", "."). "</strong> segundos equivalem a um total de: </p>";
                    echo "<ul><li>" . (int)($sem) . " semanas</li>";
                    echo "<li>" . (int)($dias) . " dias</li>";
                    echo "<li>" . (int)($horas) . " horas</li>";
                    echo "<li>" . (int)($min). " minutos</li>";
                    echo "<li>" . (int)($seg_finais). " segundos</li></ul>";


                
                
                    ?>
            </form>

        </section>
        <div id="res">



        </div>
    </main>
</body>
</html>