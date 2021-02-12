<?php
function solve($letters){
    $alphabet = 'abcdefghijklmnopqrstuvwxyz';
    for($i=0; $i<strlen($letters); $i++){
        echo $letters[$i] . " # " . strpos($alphabet, $letters[$i]) . "<br>";
    }
}
solve('abcz');

// function trippleSum(arr){

// }
// trippleSum([1, 1, 1, 1]);//No
// trippleSum()([4,2,8,6]);
// //4 + 2 == 6
// //2 + 6 == 8