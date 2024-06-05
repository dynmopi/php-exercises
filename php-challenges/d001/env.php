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
        <h1>Resultado:</h1>
    </header>
    <main>
        <section>
            <form>
            <?php 
            $num = $_GET['num'];
            $sucessor = $num + 1;
            $antecessor = $num - 1;

            echo "<p>O número informado é: $num <br></p>";
            echo "<p>O seu sucessor é $sucessor <br></p>";
            echo "<p>O seu antecessor é $antecessor <br></p>"

            
            
            ?>
            <p id="voltar"><a href="javascript:history.go(-1)">Voltar</a></p>
            </form>
        </section>
    </main>
    <footer>

    </footer>
</body>
</html>
