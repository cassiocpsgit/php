<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 3</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <section>
        <h1>Conversor de Moedas v1.0</h1>
        <?php 
            $real = $_GET["din"];
            $cot = 5.22;
            $dolar = $real / $cot;
//Formatação dos caracteres simplesmente            
            //echo "Seus R\$" . number_format($real, 2, ",", ".") . " equivalem a US\$" . number_format($dolar, 2, ",",".");

//Formatação de moedas com internacionalização
//Biblioteca intl (internallization PHP)
            $padrão = numfmt_create("pt_BR", NumberFormatter::CURRENCY);
            
            echo "Seus " . numfmt_format_currency($padrão, $real, "BRL") . " equivalem a " . numfmt_format_currency($padrão, $dolar, "USD");

            echo "<p><strong>* Cotação fixa de 5,22</strong> informada diretamente no código.</p>";        
        ?>
        <button onclick="javascript:window.location.href='index.html'">&#x1F504; Voltar</button> 
    </section>
</body>
</html>