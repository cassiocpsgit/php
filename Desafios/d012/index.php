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
        $segs = $_GET['segs'] ?? 0;
              
    ?>
    <main>
        <h1>Calculadora de Tempo</h1>
        <form action="<?php echo $_SERVER['PHP_SELF']?>" method="get">
            <label for="segs">Qual o total de segundos?</label>
            <input type="number" name="segs" id="segs" step="1" value="<?=$segs?>">                                
            <input type="submit" value="Calcular">    
        </form>
    </main>
    <section>
        <h2>Totalizando</h2>
    <?php
        $sobra = $segs;
        $sem = (int)($sobra / 604800);
        $sobra = $sobra % 604800;
        $dia = (int)($sobra / 86400);
        $sobra = $sobra % 86400;
        $hor = (int)($sobra / 3600);
        $sobra = $sobra % 3600;
        $min = (int)($sobra / 60);
        $sobra = $sobra % 60;
        $seg = $sobra;


        echo "Analisando o valor que você digitou, <strong>$segs segundos</strong> equivalem a um total de:<br>";

        echo "
            <ul>
                <li>$sem semanas</li>
                <li>$dia dias</li>
                <li>$hor horas</li>
                <li>$min minutos</li>
                <li>$seg segundos</li>
            </ul>
        ";
    ?>
    </section>          
</body>
</html>