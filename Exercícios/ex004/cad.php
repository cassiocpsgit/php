<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Resultado do processamento</h1>
    </header>
    <main>
        <?php 
            //var_dump($_GET); // A $_REQUEST É UMA JUNÇÃO DAS VARIÁVEIS $_GET, $_POST E $_COOKIES
            $n = $_GET["nome"] ?? "sem nome";
            $s = $_GET["snome"]?? "desconhecido";
            echo "É um prazer te conhcer, <strong>$n $s</strong>. Este é o meu site."
        ?>
        <p><a href="javascript:history.go(-1)">Voltar para a página anterior</a></p>
    </main>
</body>
</html>