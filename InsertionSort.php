<?php
function insertionSort(array $list): array {
    $length = count($list);

    for ($i = 1; $i < $length; $i++) {
        $key = $list[$i];
        $j = $i - 1;

    
        while ($j >= 0 && strcasecmp($list[$j], $key) > 0) {
            $list[$j + 1] = $list[$j];
            $j--;
        }

    
        $list[$j + 1] = $key;
    }

    return $list;
}

$names = ["Carlos", "Ana", "beatriz", "David", "ángel", "fernando", "Zulema"];

echo "Lista original:\n";
print_r($names);

$sortedNames = insertionSort($names);

echo "\nLista ordenada alfabéticamente:\n";
print_r($sortedNames);
?>
