<?php


$x = 1.0;
$y = 1;

var_dump($x === $y);

$a = '';
$b = false;
var_dump($a == $b);

$a = (int)1;
$b = true ;

var_dump($a != $b );

$a = (int)1;
$b = true ;
var_dump($a !== $b);

$a = false;
$b = (bool)0 ;

var_dump($a <=> $b);

$a = (bool)null;
$b = (bool)'';

var_dump($a == $b);

$a = (int)1;
$b = '12test';

var_dump($a xor $b);

$a = '';
$b = boolval(1);

var_dump($a || $b);