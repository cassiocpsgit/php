<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 9</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
        $atual = date('Y'); 
        $nasc = $_GET['nasc'] ?? 0; 
        $ano = $_GET['ano'] ?? 0;
              
    ?>
    <main>
        <h1>Calculando a sua idade</h1>
        <form action="<?php echo $_SERVER['PHP_SELF']?>" method="get">
            <label for="nasc">Em que ano você nasceu?</label>
            <input type="number" name="nasc" id="nasc" value="<?=$nasc?>">
            <label for="ano">Quer saber a sua idade em que ano? (atualmente estamos em <strong><?=$atual?></strong>)</label>
            <input type="number" name="ano" id="ano" value="<?=$ano?>">                      
            <input type="submit" value="Qual será a minha idade?">    
        </form>
    </main>
    <section>
        <h2>Resultado</h2>
    <?php
        $res = $ano - $nasc;
        echo "Quem nasceu em $nasc vai ter <strong>$res anos</strong> em $ano!";        
    ?>
    </section>    
</body>
</html>