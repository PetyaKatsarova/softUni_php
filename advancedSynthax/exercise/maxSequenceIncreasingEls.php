<?php
function maxSeqIncreasing($arr){
    $maxCount = 0;
    $startIndex = 0;
    for($row=0; $row<count($arr); $row++){
        $currCount = 0;
        for($col=$row; $col<count($arr)-1; $col++){
            if($arr[$col]<$arr[$col+1]){
                $currCount++;
                if($currCount > $maxCount){
                    $maxCount = $currCount;
                    $startIndex = $row;
                }
            }
            else{
                break;
            }   
        }
    }
    for($i=0; $i<=$maxCount; $i++){
        echo $arr[$startIndex+$i];
    }
}

maxSeqIncreasing([0,1,1,2,2,3,3]);// 0 1