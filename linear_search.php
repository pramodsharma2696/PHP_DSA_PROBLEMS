<?php
 class Algorithm{
    public function linear_search($data, $target){
        $result =[];
        for($i=0; $i < count($data); $i++) {
            if($data[$i] == $target){
                return $i;
            }
        }        
    }

    public function verify($index){
        if(isset($index) && !empty($index) && $index !=''){
            echo "Target found at index : ".$index;
        }else{
            echo "Target not found.";
        }
    }
 }

$numbers = [2, 3, 5, 90, 30, 20, 6, 4, 200, 120, 50, 34, 21];

 $ClassObject = new Algorithm;
 $returnedData = $ClassObject->linear_search($numbers, 200);
 $ClassObject->verify($returnedData);




