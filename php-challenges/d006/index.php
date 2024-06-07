<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1></h1>
    <main>
        <?php 
            $dividendo = $_GET["div"] ?? 0;
            $divisor = $_GET["divs"] ?? 1;
        ?>
        <section>
            <form action="<?= $_SERVER['PHP_SELF']?>" method="get">
            <label for="idiv">Dividendo: </label>
            <input type="number" id="idiv" name="div">
            <label for="idivs">Divisor: </label>
            <input type="number" id="idivs" name="divs">
            <input type="submit" value="Analisar">

            </form>
            <?php 
                

                
                $quociente = ($dividendo / $divisor);
                $resto = ($dividendo % $divisor);
                
                echo "$dividendo<br>";
                echo "$divisor<br>";
                echo "$quociente<br>";
                echo "$resto<br>";
            ?>
            <div id="res">


            </div>
        </section>
    </main>
</body>
</html>