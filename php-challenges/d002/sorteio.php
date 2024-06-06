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
        <h1>Sorteio</h1>
    </header>
    <main>
        <section>
            <form action="sorteio.php">
                
                <?php 
                    $random = rand(1, 100);
                    echo "O valor gerado foi de: $random";
                ?>
                    <input type="submit" value="Gerar outro número">

            </form>
        </section>
    </main>
</body>
</html>