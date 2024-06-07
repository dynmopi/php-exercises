<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style/style.css">
</head>
<body>
    <header>
        <h1>Analisador de número real</h1>
    </header>
    <main>
        <section>
            <form>
                <?php 
                    $num = $_GET["num"];
                    $int = (int) $num;
                    $dec = $num - $int;
                    
                    echo "<p>O número digitado pelo o usuário é de: " . number_format($num, 3,",",".") . "</p>";

                    echo "<ul><li>A sua parte inteira é de <strong>$int</strong></li>";
                    echo "<li>E a sua parte decimal é de <strong>" . number_format($dec, 3, ",", ".")  ."</strong></li></ul>";

                ?>
            </form>
            <p><a href="javascript:history.go(-1)">Voltar</a></p>
        </section>
    </main>
</body>
</html>