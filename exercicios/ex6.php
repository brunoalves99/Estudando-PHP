<?php

$carro = [
    'marca' => 'BMW',
    'ano' => '2020',
    'cor' => 'prata',
];

print_r($carro);
echo "<br>";
echo $carro['marca'];
echo "<br>";
echo $carro['cor'];
echo "<br>";

$marca = $carro['marca'];
$cor = $carro['cor'];

echo "A marca do carro é $marca e a cor é $cor.";

?>  