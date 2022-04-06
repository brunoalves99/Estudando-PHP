<?php
    // Boleanos
    echo true;
    echo "<br>";
    echo false;

    if(true) {
        echo "É verdadeiro! <br>";
    }
    if(5 > 2) { // true
        echo "É verdadeiro! <br>";
    }

    $podeEntrar = true;

    if($podeEntrar) {
        echo "O usuário pode entrar <br>";
    }

    // Checando boolean
    $a = true;
    
    if(is_bool(false)){
        echo "é um boleano <br>";
    }

    if(0 == false){
        echo "0 é considerado falso! <br>";
    }

?>