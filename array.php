<?php

function randArray(int $length = 30, int $min = 0, int $max = 30): array
{
    $array = [];
    for ($i = 0; $i < $length; $i++) {
        $array [] = rand($min, $max);

    }

    sort($array, $flags = SORT_REGULAR);

    return $array;
}

$array = randArray(30, 0, 30);

var_dump($array);
echo min($array) . PHP_EOL;
echo max($array) . PHP_EOL;