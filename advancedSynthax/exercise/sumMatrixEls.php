<?php 
function sumMatrixEls($str, $arr2){
   $matrixSize = array_map("intval", explode(', ', $str)); //split
   $row = $matrixSize[0];
   $col = $matrixSize[1];
   $sum = 0;
   for($r=0; $r<$row; $r++){
      for($c=0; $c<$col; $c++){
         $sum += $arr2[$r][$c];
      }
   }
   echo $row . "<br>";
   echo $col . "<br>";
   echo $sum . "<br>";
}

sumMatrixEls('3, 6',
[[7, 1, 3, 3, 2, 1],
[1, 3, 9, 8, 5, 6],
[4, 6, 7, 9, 1, 0]]);//76 is the sum of all els