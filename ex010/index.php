<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>
    <h1>Retroalimentação</h1>
    <?php
        // Retroalimentação: é quando o php se envia para si mesmo
        // Adquirindo os dados para a retroalimentação
        $valor1 = $_GET["v1"] ?? 0;
        $valor2 = $_GET["v2"] ?? 0;
    ?>
    <main>
        <form action="<?=$_SERVER['PHP_SELF'] ?>" method="get"> <!--Você pode colocar short tags no lugar de <//?php echo ?>, ficando assim, <//?=?>-->
            <label for="v1">Valor 1</label>
            <input type="number" id="iv1" name="v1" required>
            <label for="v2">Valor 2</label>
            <input type="number" id="iv2" name="v2" required>
            <input type="submit" value="Enviar">
        </form>
    </main>
    
    <div id="res">
        <?php 
            $soma = $valor1 + $valor2;

            echo "<p>A soma entre $valor1 e $valor2 é de $soma"
        ?>
    </div>
           
    </body>
</html>