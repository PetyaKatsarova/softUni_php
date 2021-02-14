<?php
function fibonacci($n,$k){
    $arr = array_fill(0,$n,0);
    $arr[0] = 1;
    for($i=0; $i<count($arr); $i++){
        $startIndex = max(0,($i-$k));
        $sum = 0;
        for($j=$startIndex; $j<=$i; $j++){
            $sum += $arr[$j];
           // echo $sum . PHP_EOL;
        }
        $arr[$i] = $sum;
    }
    echo implode(' ', $arr);
}

fibonacci(9,5); //1 1 2 4 8 16 31 61 120