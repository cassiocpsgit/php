<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado Desafio 1</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>   
    <main>
        <h1>Resultado Final</h1>
        <p>
            <?php
                $num = $_REQUEST["num"] ?? 0;
                $ant = $num - 1;
                $suc = $num + 1;
                echo "<p>O número escolhido foi <strong>$num</strong></p>";
                echo "<p>O seu <em>antecessor</em> é $ant</p>";
                echo "<p>O seu <em>sucessor</em> é $suc</p>";
            ?>
        </p>
        <button onclick="javascript:window.location.href='index.html'">&#x2B05; Voltar</button>
    </main>
</body>
</html>