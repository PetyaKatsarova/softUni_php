<?php
function reverse3($arr){
    for($i=0; $i<count($arr)/2; $i++){
        $rev = count($arr)-1-$i;
        $temp = $arr[$i];
        $arr[$i] = $arr[$rev];
        $arr[$rev] = $temp;
    }
    print_r($arr);
}
// -1 gets converted to 1-
function reverse2($arr){
   $str = implode(" ", $arr);
   echo strrev($str);
}

function reverse($arr){
    echo implode(' ', array_reverse($arr));
}

reverse(['a','b','c', -1]);


function solve($arr){
    $num = array_shift($arr);
    for($i=$num; $i>=0; $i--){
        echo $arr[$i]  . ' ';
    }
}

solve([3,10,20,30]);// 30 20 10