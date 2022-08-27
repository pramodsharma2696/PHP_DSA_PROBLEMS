<?php
//Bubble Sorting algorithm.

$arr = [2, 3, 5, 90, 30, 20, 6, 4, 200, 120, 50, 34, 21];
$length = count($arr);
for($i=0; $i < $length ; $i++){

    for ($j=0; $j < $length-1-$i; $j++) { 
         
        if($arr[$j] > $arr[$j+1]){
            $temp = $arr[$j];
            $arr[$j] = $arr[$j+1];
            $arr[$j+1] = $temp;
        }
    }
}
echo "Sorted data :";
echo implode(',',$arr);