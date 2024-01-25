<?php

//echo "Hello World!";

//echo "Hello , What is your name?\n";
//$name = trim(fgets(STDIN));
//echo "Hi $name. How old are you?\n";
//$age = fgets(STDIN);


//$number1 = '9';
//$number2 = 3;

//echo $number1 % $number2 . PHP_EOL;


//echo "What numbers do you want to sum up? Number 1\n" ;
//$number1 = fgets(STDIN);
//echo "Number 2\n";
//$number2 = fgets(STDIN);
//
//echo $number1 + $number2 . PHP_EOL;


echo "What numbers do you want to sum up? Number 1\n" ;
$number1 = trim(fgets(STDIN));
echo "Number 2\n";
$number2 = trim(fgets(STDIN));
echo "What do you want to do?(+,-,/,*,**,%?)\n";
$number3 = trim(fgets(STDIN));
$result = null;


if($number3 === '+'){$result = $number1 + $number2;}
if($number3 === '-'){$result = $number1 - $number2;}
if($number3 === '/'){$result = $number1 / $number2;}
if($number3 === '*'){$result = $number1 * $number2;}
if($number3 === '**'){$result = $number1 ** $number2;}
if($number3 === '%'){$result = $number1 % $number2;}

echo $result . PHP_EOL;

 
//$number1 = 'Hello ';
//$number1 .= 'Kirill';
//$number1 .= PHP_EOL;
//echo $number1 ;


