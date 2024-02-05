<?php

$a = 1;
while ($a <= 10) {
    echo $a . PHP_EOL;
    $a++;
}

function f(int $x): int
{
    $y = $x;
    while (--$x) $y *= $x;
    return $y;
}

echo f(5) . PHP_EOL;


$c = 2;
while ($c <= 20) {
    echo $c++ . PHP_EOL;
    $c++;
}

