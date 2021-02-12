<?php

use function PHPSTORM_META\type;

function sumReversedNums($arr){
    $sum = 0;
   // echo gettype($str);
//    echo strrev("Hello world!"); 
    for($i=0; $i<count($arr); $i++){
        $sum += intval(strrev($arr[$i]));
    }
    echo $sum;
}

sumReversedNums([123,234,12]);//774