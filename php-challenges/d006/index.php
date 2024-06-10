<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
td{
    border-bottom: 1px solid black;
    border-right: 1px solid black;
}


</style>
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
               
                $quociente = intdiv($dividendo, $divisor);
                $resto = ($dividendo % $divisor);
                
                echo "<table>";
                echo "<tr>";
                    echo "<td>$dividendo</td>";
                    echo "<td>$divisor<td>";
                echo "</tr>";
                echo "<tr>";
                    echo "<td>$resto</td>";
                    echo "<td>$quociente</td>";
                echo "</tr>";
            echo "</table>";

            ?>
            <div id="res">
               

            </div>
        </section>
    </main>
</body>
</html>