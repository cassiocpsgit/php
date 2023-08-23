<?php 
    $nome = 'Cassio';
    $mao = "\u{1F596}";
    const emofogo = "\u{1F525}";
    const emocheck = "\u{2705}";

    echo "$nome $mao".emofogo;
    echo "<br>";
    echo emocheck.date('Y')."<br><br>";
    
    //Heredoc
    $curso = "PHP";
    $ano = date('Y');
    echo <<< FRASE
        Estou estudando $curso em $ano.<br>
        Olá mundo!<br>
        Cassio Cortez<br><br>
        FRASE;

    //Nowdoc
    $curso = "PHP";
    $ano = date('Y');
    echo <<< 'FRASE'
        Estou estudando $curso em $ano.<br>
        Olá mundo!<br>
        Cassio Cortez<br>
        FRASE;
?>