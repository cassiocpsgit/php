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
        $sac = $_GET['sac'];
              
    ?>
    <main>
        <h1>Caixa Eletrônico</h1>
        <form action="<?php echo $_SERVER['PHP_SELF']?>" method="get">
            <label for="sac">Qual valor você deseja sacar?(R$)*</label>
            <input type="number" name="sac" id="sac" step="10" value="<?=$sac?>">                                
            <input type="submit" value="Calcular">    
        </form>
    </main>
    <section>        
        <?php
            $sobra = $sac;
            $cem = (int)($sobra / 100);
            $sobra = $sobra % 100;
            $cin = (int)($sobra / 50);
            $sobra = $sobra % 50;
            $vin = (int)($sobra / 20);
            $sobra = $sobra % 20;
            $dez = (int)($sobra / 10);
            $sobra = $sobra % 10;
        ?>
        <h2>Saque de R$<?=number_format($sac,2,",",".")?> realizado</h2>
        <p>O caixa eletrônico vai te entregar as seguintes notas:</p>
        <ul>
            <li><img src="100-reais.jpg" alt="Cem Reais"> X <?=$cem?></li>
            <li><img src="50-reais.jpg" alt="Cinqüenta Reais"> X <?=$cin?></li>
            <li><img src="20-reais.jpg" alt="Vinte Reais"> X <?=$vin?></li>
            <li><img src="10-reais.jpg" alt="Dez Reais"> X <?=$dez?></li>                            
        </ul>    
    </section>            
</body>
</html>