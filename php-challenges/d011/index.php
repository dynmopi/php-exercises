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
        <form action="<?php $_SERVER['PHP_SELF'] ?>">
            <label for="ipreco">preço do produto: </label>
            <input type="number" id="ipreco" name="preco">

            <label for="iperc">percentual: </label>
            <input type="range" name="perc" id="iperc" step="1">
            <span id='ivalue'>50</span>

            <input type="submit" value="submit">
        </form>
        <div id="script">
            <?php 
            
            ?>
        </div>
    </main>
    <script>
        var range = window.document.getElementById('iperc'); 
        var value = window.document.getElementById('ivalue');

        

    </script>
</body>
</html>