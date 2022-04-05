<?php
    $a = 1.12;
    echo $a;
    echo "<br>";
    echo 12.5 + 1.3278;
    echo "<br>";
    echo 12 + 1.3278;
    echo "<br>";

    // Checando se é float
    $a = "teste";
    $b = 12.8;

    if(is_float($a)) {
        echo "É float 1";
    }
    
    if(is_float($b)) {
        echo "É float 2";
    }
    
?>