<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 2</title><link rel="stylesheet" href="style.css">
</head>
<body>
    <section>
        <h1>Trabalhando com números aleatórios</h1>
        <?php 
            $num = rand(0,100);

            // rand() = 1951 - Linear Congrential Generator. após a versão 7.1 do PHP esta função usa o mt_rand().
            // mt_rand() = 1997 - Mersenne Twister que é 4x mais rápido do que o rand().
            // random_int() = gera números aleatórios criptograficamente seguros. Porém é o modo mais lento.

            echo "<p>Gerando um número aleatório entre 0 e 100...</p>";
            echo "<p>O valor gerado foi <strong>$num</strong></p>";     
        ?>
        <button onclick="javascript:window.location.href='index.php'">&#x1F504; Gerar outro</button>        
    </section>
</body>
</html>