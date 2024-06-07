<!DOCTYPE html>
<html lang="en">
<head> 
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício-php</title>
</head>
<body>
    <main>
        <pre>
            <form>
                <?php 
                    //São variáveis internas no PHP, que apresentam configs gerais

                    setcookie("dia-da-semana", "SEGUNDA", time() + 3600); //Define os cookies

                    session_start();
                    $_SESSION["teste"] = "Funcionou!"; //Inicia o Session

                    echo "<h1>Super Global GET</h1>";
                    var_dump($_GET);    //Mostra os valores adquiridos através do método GET (Arrays)

                    echo "<h1>Super Global POST</h1>";
                    var_dump($_POST);   //Mostra os valores adquiridos através do método POST (Arrays)

                    echo "<h1>Super Global REQUEST<h1>";
                    var_dump($_REQUEST);    //Mostra todos os dois valores adquiridos, tanto o método GET como  o POST

                    echo "<h1>Super Global COOKIE";
                    var_dump($_COOKIE); //Mostra os cookies em forma de arrays

                    echo "<h1>Super Global SESSION";
                    var_dump($_SESSION); //Semelhantes aos rascunhos

                    echo "<h1>Super Global ENV</h1>";
                    var_dump($_ENV); //Variáveis de ambiente

                    //foreach (getenv() as $c => $v) { Li a documentação, mas não faço ideia do que seja
                    //    echo "<br> $c -> $v";
                    //}

                    echo "<h1>Super Global SERVER</h1>";
                    var_dump($_SERVER); // Adquire as informações do server, onde está hospedado, qual usuário(...).

                    echo "<h1>Super Global GLOBALS</h1>";
                    var_dump($GLOBALS); //Mostra todas as super globais em um só comando
                ?>

            </form>
        </pre>
    </main>
</body>
</html>