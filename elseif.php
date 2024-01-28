<?php

$code = 200;
if (200 === $code)
    echo 'Yellow' . PHP_EOL;
else {
    echo 'Green' . PHP_EOL;
}

    if (230 === $code)
        echo 'Red' . PHP_EOL;
    else {
        echo 'Blue' . PHP_EOL;
}


$code = 260;
if (200 === $code) {
    echo 'Green' . PHP_EOL;
} elseif (230 === $code) {
    echo 'Red' . PHP_EOL;
} elseif (240 === $code) {
    echo 'Blue' . PHP_EOL;
} elseif (250 === $code) {
    echo 'Brown' . PHP_EOL;
} elseif (260 === $code) {
    echo 'Violet' . PHP_EOL;}
elseif (270 === $code) {
    echo 'Black' . PHP_EOL;}
else {
    echo 'White' . PHP_EOL;
}

$code = 220;
switch ($code) {
    case 200:
        echo 'Green' . PHP_EOL;break;
    case 230:
        echo 'Red' . PHP_EOL;break;
    case 240:
        echo 'Blue' . PHP_EOL;break;
    case 250:
        echo 'Brown' . PHP_EOL;break;
    case 260:
        echo 'Violet' . PHP_EOL;break;
    case 270:
        echo 'Black' . PHP_EOL;break;
    default:
        echo 'White' . PHP_EOL;
}

$code = 240;
$result = match ($code) {
    200 => 'Green',
    230 => 'Red',
    240 => 'Blue',
    250 => 'Brown',
    260 => 'Violet',
    270 => 'Black',
    default => 'White',

};
var_dump($result);