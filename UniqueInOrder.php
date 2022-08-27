<?php
function uniqueInOrder($iterable){
    $result = array();
     if(is_array($iterable)){
            $str = $iterable;
        }elseif(empty($iterable)){
            $str = array();
        }else{
            $str = str_split($iterable);
        }
    
        for($i = 0; $i < count($str); $i++){
          if($str[$i] !== $str[$i+1]){
              array_push($result, $str[$i]);
          }
        }
       return $result;
    
    
    }

$test = uniqueInOrder("AAAABBBCCDAABBB");
$string = implode(",",$test);
echo $string;