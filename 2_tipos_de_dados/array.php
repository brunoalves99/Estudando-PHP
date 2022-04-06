<?php
    $a = [1,2,3];
    print_r($a);
    echo "<br>";
    echo $a[0];
    echo "<br>";

    $arr1 = ["Matheus", 1005, true];
    print_r($arr1);
    echo "<br>";
    echo $arr1[0];
    echo "<hr>";

    // Array Associativo
    $arr = ['nome' => 'Shark', 'patas' => 4, 'cor' => "Marrom"];
    echo $arr['nome'];
    echo "<br>";
    print_r($arr);
    echo "<br>";
    echo $arr['patas'];

    $arrAssoc = ['chave' => 'valor', 'bool' => true];
    echo "<br>";
    print_r($arrAssoc);
?>