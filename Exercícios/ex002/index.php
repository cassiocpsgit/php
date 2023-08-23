<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>
    <h1>Exemplo de PHP</h1>
    <?php
    
        echo "Hoje é dia " . date("d/m/Y");
        echo " e a hora atual é " . date("G:i:s");
        echo ".";
    ?>
    <?
        echo "Olá,";
    ?>
    <?php
        $nome = "Cassio";
        $sobrenome = "Cortez";
        $idade = 39;
        $peso = 90;
        $casado = false;
        const PAIS = "Brasil"; //constante pode conter acentos

        echo "Muito prazer, $nome $sobrenome! Você mora no " . PAIS;
        echo ", você tem $idade anos e pesa $peso Kg e $casado"
    ?>
</body>
</html>