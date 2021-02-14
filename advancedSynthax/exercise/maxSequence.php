<?php
function mostFrequentNum($arr){
    $maxCount = 0;
    $num = '';
    for($row=0; $row<count($arr); $row++){
        $currCount = 0;
        for($col=$row; $col<count($arr); $col++){
            if($arr[$row] == $arr[$col]){
                $currCount++;
            }
            if($currCount > $maxCount){
                $maxCount = $currCount;
                $num = $arr[$col];
            }
        }
    }
    // print the longest sequence, if a few: the first one
    for($i=0; $i<intval($maxCount); $i++){
        echo $num . PHP_EOL;
    }
}

mostFrequentNum([7,7,7,0,2,2,2,0,10,10,10]);
mostFrequentNum([4,4,4,4]);