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
        <h1>Conversor de Moedas v2.0</h1>
        <?php
            // Cotação vinda da API do Banco Central do Brasil
            $inicio = date("m-d-Y", strtotime("-7 days"));
            $fim = date("m-d-Y");    
            $url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\''.$inicio.'\'&@dataFinalCotacao=\''.$fim.'\'&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao';

            $dados = json_decode(file_get_contents($url), true);

            $cotação = $dados["value"][0]["cotacaoCompra"]; 

            $real = $_GET["din"] ?? 0;
            $cot = $cotação;
            $dolar = $real / $cot;
//Formatação dos caracteres simplesmente            
            //echo "Seus R\$" . number_format($real, 2, ",", ".") . " equivalem a US\$" . number_format($dolar, 2, ",",".");

//Formatação de moedas com internacionalização
//Biblioteca intl (internallization PHP)
            $padrão = numfmt_create("pt_BR", NumberFormatter::CURRENCY);
            
            echo "Seus " . numfmt_format_currency($padrão, $real, "BRL") . " equivalem a " . numfmt_format_currency($padrão, $dolar, "USD");

            echo "<p>* Conforme cotação de <strong>" . number_format($cot,2,",",".") . "</strong> obtida diretamente do site do <strong>Banco Central do Brasil</strong>.</p>";        
        ?>
        <button onclick="javascript:window.location.href='index.html'">&#x1F504; Voltar</button> 
    </section>
</body>
</html>