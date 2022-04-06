<?php

class Pessoa {
    function falar() {
        echo "Olá pessoal!";
    }
}

$bruno = new Pessoa();
$bruno->nome = "Bruno";
echo $bruno->nome;
echo "<br>";
$bruno->falar();

echo "<br>";

class Carro {
    function ligar() {
        echo "Ligou!";
    }
}

$carro1 = new Carro();
echo $carro1->ligar();

?>