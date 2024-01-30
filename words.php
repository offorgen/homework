<?php

$string = 'Hello world. I\'m a human!';


//var_dump(strlen($string));

//
//    if (($result = strpos($string, '.')) !== false){
//        $position = substr($string , $result + 1);
//        echo $position . PHP_EOL;
//
//}


var_dump(strlen($string));
if((strlen($string)) >= 20) {


if(($result = strpos($string, '.')) !== false){
    $position = substr($string , $result + 1);
    echo ltrim($position . PHP_EOL); }}