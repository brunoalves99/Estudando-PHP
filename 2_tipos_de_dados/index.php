<?php

// string
$texto = "Um texto qualquer";

// integer
$numero = 2030;

//float
$numero2 = 10.4;

// boolean
$tem = false;

// array
$arrSimples = ['notebook', 'positivo', 'preto'];
print_r($arrSimples);
echo "<br>";

// array associativo
$arrAssoc = [
    'aparelho' => "smartphone",
    'marca' => "samsung",
    'cor' => "preto",
    'SO' => "android",
];
print_r($arrAssoc);
echo "<br>";

// object
class Aluno {
    function estudar() {
        echo "Estudando!";
    }
}

$bruno = new Aluno();
$bruno->nome = "bruno";
$bruno->idade = 22;
echo $bruno->estudar();

?>