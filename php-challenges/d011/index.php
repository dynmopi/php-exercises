<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        input{
            
            margin-bottom: 10px;
        }
        input[type=submit]{
            display: block;
        }

        label{
            display: block;
            margin-bottom: 10px;
        }
    
    </style>
</head>
<body>
    <main>
        <form action="<?php $_SERVER['PHP_SELF'] ?>" method="get">
            <label for="ipreco">preço do produto: </label>
            <input type="number" id="ipreco" name="preco">

            <label for="iperc">percentual: </label>
            <input type="range" name="perc" id="iperc" step="1" oninput="valor()"> 
            <!--oninput é um evento dom que chama o js-->
            <!--dê uma olhada no script-->
            <span id='ivalue'>?</span><strong>%</strong>

            <input type="submit" value="submit">
        </form>
        <div id="script">
            <?php 
                //local onde os dados são adquiridos no formulário
                $preco = $_GET['preco'] ?? 0;
                $percentual = $_GET['perc'] ?? 0;
                //cálculo de porcentagem
                $porcentagem_calculada = $preco*($percentual/100);
                $aumento = $preco + $porcentagem_calculada;

                //formatação da moeda brasileira
                $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);
        
                
                echo "<h2>resultado: </h2>";
                echo "<p>o produto que custava " . numfmt_format_currency($padrao, $preco, "BRL") . ", com <strong>$percentual% de aumento</strong>, vai passar a custar <strong>" . numfmt_format_currency($padrao, $aumento, "BRL"). "</strong> a partir de agora.</p>";
            ?>
        </div>
    </main>
    <script>
        //a função já é chamada quando o site é adentrado
        valor()

        //funcão definida para alterar o value do span
        function valor(){
            ivalue.innerText = iperc.value;
        }
        

    </script>
</body>
</html>