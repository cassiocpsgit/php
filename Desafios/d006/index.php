<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 6</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        $div1 = $_GET['div1'] ?? 0;
        $div2 = $_GET['div2'] ?? 1;    
    ?>
    <main>
        <h1>Anatomia de uma Divisão</h1>
        <form action="<?php echo $_SERVER['PHP_SELF']?>" method="get">
            <label for="div1">Dividendo</label>
            <input type="number" name="div1" id="div1" value="<?=$div1?>">
            <label for="div2">Divisor</label>
            <input type="number" name="div2" id="div2" value="<?=$div2?>">
            <input type="submit" value="Analisar">    
        </form>
    </main>
    <section>
        <h2>Estrutura da Divisão</h2>
    <?php
        $quo = intdiv($div1, $div2);
        $res = $div1 % $div2;        
    ?>
        <table class="divisao">
            <tr>
                <td><?=$div1?></td>
                <td><?=$div2?></td>          
            </tr>
            <tr>
                <td><?=$res?></td>
                <td><?=$quo?></td>
            </tr>
        </table>
    </section>    
</body>
</html>