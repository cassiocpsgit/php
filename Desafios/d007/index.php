<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 7</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        $sal = $_GET['sal'] ?? 0;            
    ?>
    <main>
        <h1>Informe o seu salário</h1>
        <form action="<?php echo $_SERVER['PHP_SELF']?>" method="get">
            <label for="sal">Salário(R$)</label>
            <input type="number" name="sal" id="sal" value="<?=$sal?>"> 
            <p>Considerando o salário mínimo de <strong>R$1.380,00</strong></p>           
            <input type="submit" value="Calcular">    
        </form>
    </main>
    <section>
        <h2>Resultado Final</h2>
    <?php
        $min = 1380;
        $quo = intdiv($sal, $min);
        $res = $sal % $min;
        echo "Quem recebe um salário de R\$ " .number_format($sal,2,",",".")." ganha <strong>$quo salários mínimos</strong> + R\$ " .number_format($res,2,",",".").".";
       
    ?>
    </section>    
</body>
</html>