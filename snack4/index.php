<!-- Creare un array con 15 numeri casuali, tenendo conto che l’array non dovrà contenere lo stesso numero più di una volta -->


<?php

$numberArray = [];

while (count($numberArray) < 15) {
    $number = rand(1, 100);
    if(!in_array($number, $numberArray)) {
        $numberArray[] = $number;
    }
}

var_dump($numberArray);
?>