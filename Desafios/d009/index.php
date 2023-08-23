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
        $v1 = $_GET['v1'] ?? 0; 
        $p1 = $_GET['p1'] ?? 0;
        $v2 = $_GET['v2'] ?? 0;
        $p2 = $_GET['p2'] ?? 0;       
    ?>
    <main>
        <h1>Médias Aritméticas</h1>
        <form action="<?php echo $_SERVER['PHP_SELF']?>" method="get">
            <label for="v1">1º Valor</label>
            <input type="number" name="v1" id="v1" value="<?=$v1?>">
            <label for="p1">1º Peso</label>
            <input type="number" name="p1" id="p1" value="<?=$p1?>"> 
            <label for="v2">2º Valor</label>
            <input type="number" name="v2" id="v2" value="<?=$v2?>">
            <label for="p2">2º Peso</label>
            <input type="number" name="p2" id="p2" value="<?=$p2?>">                        
            <input type="submit" value="Calcular Médias">    
        </form>
    </main>
    <section>
        <h2>Cálculo das Médias</h2>
    <?php
        $ma = ($v1 + $v2) / 2;
        $mp = ($v1 * $p1 + $v2 * $p2) / ($p1+ $p2);
        echo " A <strong>média aritmética simples</strong> entre $v1 e $v2 é $ma.<br>A <strong>média aritmética ponderada</strong> com pesos $p1 e $p2 é $mp."


        
    ?>
    </section>    
</body>
</html>