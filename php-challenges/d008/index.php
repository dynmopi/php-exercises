<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <header>
        <h1>Preencha um número</h1>
    </header>
    <main>
        <form action="<?php $_SERVER['PHP_SELF']; ?>" method="get">
            <section>
                <label for="inum">Número: </label>
                <input type="number" id="inum" name="num">
                <input type="submit" value="Enviar">
            </section>
            <?php 
                $num = $_GET['num'] ?? 0;

                $raiz_quadrada = $num **(1/2); //lembre-se da função interna sqrt()
                $raiz_cubica = $num **(1/3); // cuidado, coloque entre parênteses!
            
                echo "<p>Analisando o número $num temos: </p>";
                echo "<p>A raíz quadrada de " . number_format($raiz_quadrada, 3, ",");
                echo "<p> A raíz cúbida de " . number_format($raiz_cubica, 3, ",");
            ?>
        </form>
    </main>
</body>
</html>