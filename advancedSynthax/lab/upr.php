<?php 
// finding sum of main and secondary diagonals of 2d arr
// function solve($matrix){
//     $mainSum = 0; $secondarySum = 0;
//     for($row=0; $row<count($matrix);$row++){
//         $mainSum += $matrix[$row][$row];
//         $secondarySum += $matrix[$row][count($matrix)- $row - 1];
//     }
//     echo $mainSum . ' ' . $secondarySum;
// }
// solve([[20,40],[10,60]]);// 80 50

// 2d arr: matrix
// $rows = 5; 
// $cols = 4; // 4 el in inner arr
// $count = 1;
// biggest num in matrix
// $matrix = [[1,3,4], [7,6,14], [23,67,89]];
// $biggest = $matrix[0][0];
// foreach($matrix as $row){
//     foreach($row as $el){
//         if($el > $biggest){
//             $biggest = $el;
//         }
//     }
// }
// echo $biggest;

// $matrix = [];
// for($r=0; $r<$rows; $r++){
//     $matrix[$r] = [];
//     for($c=0; $c<$cols;$c++){
//         $matrix[$r][$c] = $count++;
//     }
// }
// foreach($matrix as $val){
//     foreach($val as $sth){
//         echo $sth . '; ';
//     }
// }

// ascii and str: count the occurances of same letter in the str:
// $str = 'Learning php is fun :(';
// $arr = [];
// $str = strtoupper($str);
// for($i=0; $i<strlen($str); $i++){
    //// ord($str) Return ASCII value of character
//    if(ord($str[$i]) >= ord('A') && ord($str[$i]) <= ord('Z')){
//        if(isset($result[$str[$i]])){
//            $result[$str[$i]]++;
//        }else{
//            $result[$str[$i]] = 1;
//        }
//    }
// }
// print_r($result);
// $arr = ['Sofia', '20', 'Varna', '10', 'Sofia', '5'];
// $result = [];
// for($i=0; $i<count($arr); $i+=2){
//     list($town, $num) = [$arr[$i], $arr[$i+1]];
//     if(!isset($result[$town]))
//         $result[$town] = $num;
//     else
//        $result[$town] += $num;    
// }
// print_r($result);

// while current() next()
// $assoc = ['UK'=>"Hi", 'Germany' => 'Guten Tag', 'Bulgaria' => 'Dobar den'];
// while(current($assoc)){
//     echo key($assoc) . PHP_EOL;
//     next($assoc);
// }

// assoc arrs
// $assoc = ['UK'=>"Hi", 'Germany' => 'Guten Tag', 'Bulgaria' => 'Dobar den'];
// foreach($assoc as $key=>$val){
//     echo "In $key pple say: \"$val\".";
//     echo "<br>";
// }

// reverse arr
// $arr = [1,2,3,4,5,];
// for($i=0; $i<count($arr)/2; $i++){
//     $mirrorIndex = count($arr)-1-$i;
//     $prevEl = $arr[$i];
//     $arr[$i] = $arr[$mirrorIndex];
//     $arr[$mirrorIndex] = $prevEl;
// }
// $output = implode(' ', $arr);
// echo $output;

// $arr = [1,2,3,4,5,];
// for($i=count($arr); $i>=0; $i--){
//     echo $arr[$i] . ' ';
// }

// $cars = ['a', 'b', 'c'];
// print_r($cars); //Array ( [0] => a [1] => b [2] => c )

// print checkboard
// $size = 5;
// $html = '<div class ="chessboard">';
// for($row=0; $row<$size; $row++){
//     $html .= ' <div>';
//     $color = ($row % 2 == 0) ? 'black' : 'white';
//     for($col=0; $col < $size; $col++){
//         $html .= " <span class=\"$color\">$color</span>";
//         $color = ($color == 'white' ? 'black' : 'white');
//     }
//     $html .= ' </div>';
// }
// $html .= '</div>';
// echo $html;

// continue skips to next loop iteration, print all but 'second'
// $stack = ['first', 'second', 'third', 'fourth'];
// foreach($stack as $val){
//     if($val == 'second'){
//         continue;
//     }
//     echo $val . '<br>';
// }

// $colors = ["one" => "green", "two" => "orange"];
// foreach($colors as $key => $value){
//     echo "k -> $key v -> $value<br>";
// }

// $colors = ['red', 'green', 'blue'];
// foreach($colors as $col){
//     echo "<p style='color:$col'>$col</p>";
// }

// // colorful nums
// $n = 10;
// $html = '<ul>';
// for($i=1; $i<=$n; $i++){
//     $color= 'blue';
//     if($i % 2 === 0){
//         $color = 'tomato';
//     }
//     $html .= "<li><span style='color:$color'>$i</span></li>";
// }
// $html .= '</ul>';
// echo $html;


// $bla = 4;
// echo ($bla === 5) ? 'equal' : 'not e';

// for($i=10; $i<=20; $i=rand(10,30)){
//     echo $i.PHP_EOL;
// }

// $integ = 6;
// switch($integ){
//     case 5: 
//         echo 'Ok, its 5';
//         break;
//     case 10:
//         echo 'not ok, its 10';
//         break;
//     default: 
//         echo 'this is def';
// }

// $num = 4.123456;
// echo number_format($num, 2, '.', '');
