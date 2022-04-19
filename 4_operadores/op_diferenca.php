<?php

$a = 3;
$b = 4;

if($a != $b) {
    echo "testando diferença 1 <br>";
}

if($a != 3) {
    echo "testando diferença 2 <br>";
}

if(false != 'teste') {
    echo "testando diferença 3 <br>";
}

if(3 != '3') {
    echo "testando diferença 4 <br>";
}

if(3 != '4') {
    echo "testando diferença 5 <br>";
}
?>