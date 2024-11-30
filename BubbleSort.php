<?php
function bubbleSortDescending(array $list): array {
    $n = count($list);
    for ($i = 0; $i < $n - 1; $i++) {
        for ($j = 0; $j < $n - $i - 1; $j++) {
            if ($list[$j] < $list[$j + 1]) {
                $temp = $list[$j];
                $list[$j] = $list[$j + 1];
                $list[$j + 1] = $temp;
            }
        }
    }
    return $list;
}

$numbers = [34, -2, 45, 0, -5, 34, 78, 12, -12, 45];

echo "Lista original:\n";
print_r($numbers);

$sortedNumbers = bubbleSortDescending($numbers);

echo "\nLista ordenada en orden descendente:\n";
print_r($sortedNumbers);
?>
