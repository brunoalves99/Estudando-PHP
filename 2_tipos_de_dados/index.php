<?php
    // Strings
    echo "Testando texto de aspas duplas <br>";
    echo 'Testando texto de aspas simples <br>';
    echo "Ele disse: 'Olá' <br>";
    echo 'Ele disse: "Olá" <br>';

    $idade = 15;

    echo "Ele tem $idade anos <br>";
    echo 'Ele tem $idade anos <br>';

    // Checando se é string
    $str = "Matheus";
    $num = 12;

    if(is_string($str)) {
        echo "$str é uma string 1 <br>";
    }

    if(is_string($num)) {
        echo "$num é uma string 2 <br>";
    }

    if(is_string("4234")) {
        echo "É uma string";
    }
?>