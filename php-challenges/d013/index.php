<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <header>
        <h1>Caixa eletrônico</h1>
    </header>
    <main>
        <form action="<?= $_SERVER['PHP_SELF']?>" method="get">
            <label for="ival">qual valor que deseja sacar? (R$) </label>
            <input type="number" id="ival" name="val" required step="5">
            <input type="submit" value="enviar">

            <?php 
            //pegando os valores do formulário
                $valor = $_GET['val'] ?? 0;
            //atribuindo a var valor para resto
                $resto = $valor;
            //identificando quantos serão para as notas de 100, note que o $resto é usado como value
                $tot100 = (int)($resto / 100);
            //verificando a quantidade restante, é possível fazer assim: $resto %= 50;
                $resto = $resto % 100;
            //mesmo processo do tot100
                $tot50 = (int)($resto / 50);
                $resto = $resto % 50;

                $tot25 = (int)($resto / 25);
                $resto = $resto % 25;

                $tot10 = (int)($resto / 10);
                $resto = $resto % 10;

                $tot5 = (int)($resto / 5);
                $resto = $resto % 5;

                echo "<p>para o valor de $valor, o caixa fará as seguintes entregas:</p>";
                echo "<ul><li>100 R$: $tot100</li>";
                echo "<li>50 R$: $tot50</li>";
                echo "<li>25 R$: $tot25</li>";
                echo "<li>10 R$: $tot10</li>";
                echo "<li>5 R$: $tot5</li>";
                echo "</ul>";
            ?>
        </form>
    </main>
</body>
</html>