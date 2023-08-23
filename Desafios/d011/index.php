<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 11</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        $por = $_GET['por'] ?? 0; 
        $rea = $_GET['rea'] ?? 0;
              
    ?>
    <main>
        <h1>Reajustador de Preços</h1>
        <form action="<?php echo $_SERVER['PHP_SELF']?>" method="get">
            <label for="por">Preço do Produto (R$)</label>
            <input type="number" name="por" id="por" step="0.01" value="<?=$por?>">
            <label for="rea">Qual será o reajuste?(<strong><span id="p"></span>%</strong>)</label>
            <input type="range" step="1" name="rea" id="rea" value="<?=$rea?>" oninput="mudaValor()">                      
            <input type="submit" value="Reajustar">    
        </form>
    </main>
    <section>
        <h2>Resultado do Reajuste</h2>
    <?php
        $res = $por * ($rea / 100) + $por;
        echo "O produto que custava R\$".number_format($por, 2, ",", ".").", com $rea% de aumento vai passar a custar R\$".number_format($res, 2, ",", ".")." a partir de agora.";        
    ?>
    </section>
    <script>
        mudaValor()

        function mudaValor() {
            p.innerText = rea.value;
        }
    </script>    
</body>
</html>