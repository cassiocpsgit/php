<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ex003</title>
</head>
<body>
    <h1>Teste de tipos primitivos</h1>
    <?php
        //0x = Hexadecimal 0b = Binário 0 = Octal
        // $num = 010;
        // echo "O valor da variável é $num.";

        // $v = true;
        // var_dump($v);

        // $num = (int)3e2; // 3 x 10(2)
        // echo "O valor é $num";
        // var_dump($num);

        // $num = (int) "a";
        // var_dump($num)

        //array
        // $num = [1,2.5,4, false, "Cassio"]; 
        // var_dump($num);

        //objeto
        class Pessoa {
            private string $nome;
        }
        $p = new Pessoa;
        var_dump($p);
    ?>
</body>
</html>