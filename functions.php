<?php


declare(strict_types=1);
//1
//function S(int|float $number1): int|float
//{
//    return pi() * ($number1 ** 2);
//
//}
//
//$number = 5;
//$s = S($number);
//echo $s . PHP_EOL;
//
//
//function degree(int|float $number1, int|float $pow)
//{
//    return $number1 ** $pow;
//
//}
//
//$result = degree(15, 2);
//echo $result . PHP_EOL;
//
//
//function degree2(int|float &$number, int|float $pow)
//{
//    $number **= $pow;
//}
//
//$number3 = 5;
//degree2($number3, 2);
//echo $number3 . PHP_EOL;


// 2
//$function = function(string $name){
//    echo "Hello $name" . PHP_EOL;
//
//};
//$result = $function('allo');
//echo $result;
$function = function(){
    echo 'result';
};
function sum(int $number1, int $number2, ?closure $function = null): int|float
{   $result = $number1 * $number2;

    if (isset($function)) {
        echo $result . PHP_EOL;
    }
    return $result;
}
sum(5 , 3, $function);

//$function = function () {
//    echo 'hello';
//};
//
//$function();