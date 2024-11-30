<?php
function mergeSort(array $list): array {
    if (count($list) <= 1) {
        return $list;
    }

    $middle = intdiv(count($list), 2);
    $left = array_slice($list, 0, $middle);
    $right = array_slice($list, $middle);

    $left = mergeSort($left);
    $right = mergeSort($right);

    return merge($left, $right);
}

function merge(array $left, array $right): array {
    $result = [];
    $i = 0; 
    $j = 0; 

    while ($i < count($left) && $j < count($right)) {
        if (strcasecmp($left[$i], $right[$j]) <= 0) { 
            $result[] = $left[$i];
            $i++;
        } else {
            $result[] = $right[$j];
            $j++;
        }
    }

    while ($i < count($left)) {
        $result[] = $left[$i];
        $i++;
    }

    while ($j < count($right)) {
        $result[] = $right[$j];
        $j++;
    }

    return $result;
}

$words = ["zorro", "manzana", "perro", "Árbol", "gato", "elefante", "Pez"];

echo "Lista original:\n";
print_r($words);

$sortedWords = mergeSort($words);

echo "\nLista ordenada alfabéticamente:\n";
print_r($sortedWords);
?>
