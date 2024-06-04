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
        <h1>Resultado do processamento</h1>
    </header>
    <main>
        <?php 
            // var_dump($_REQUEST); //Já vem declarada, (super global), é uma junção de $_GET $_POST $_COOKIES

            $nome = $_GET["nome"] ?? "Sem nome"; //name no html, $_GET = array
            $sobrenome = $_GET["sobrenome"] ?? "Desconhecido";// name no html, esse ?? após é para caso não houver nada no input

            echo "<p>É um prazer te conhecer, $nome $sobrenome! este é o meu site";
        ?>
        <p>
            <a href="javascript:history.go(-1)">Voltar para a página inicial</a>
        </p>
    </main>
</body>
</html>