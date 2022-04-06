<?php

$pessoa = [
    'nome' => "Bruno",
    'idade' => 22,
    'profissao' => "Programador",
    'graduacao' => "Ciências da Computação",
];

print_r($pessoa);
echo "<br>";

$nome = $pessoa['nome'];

if($pessoa['idade'] >= 18) {
    echo "$nome é maior de idade.";
} else {
    echo "$nome não é maior de idade.";
}


?>