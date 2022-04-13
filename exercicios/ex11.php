<?php

$exp1 = "5" * 12;
echo $exp1;

echo "<br>";

$tipo = gettype($exp1);
echo $tipo;

echo "<br>";
echo gettype([]);
echo "<br>";
echo gettype(12.2);
echo "<br>";
echo gettype("teste");


?>