<?php
function parse($data) {
    $dataarr = str_split($data);
    $array = [];
    $val = 0;
   for($i = 0; $i < count($dataarr); $i++) {
      $char = $dataarr[$i];
      if($char == 'i'){
        $val += 1;
      }elseif($char == 'd'){
        $val -= 1;
      }elseif($char == 's'){
        $val **= 2;
      }elseif($char == 'o'){
        array_push($array, $val);
      }else{
        $dataarr = array_diff($dataarr, array($val));
        // unset($dataarr[$i]);
      }

    }
    return $array;
    
  }
  $arr = parse("iiisxxxdoso");
echo implode(",", $arr);
//   echo"<pre>";print_r($data);exit;