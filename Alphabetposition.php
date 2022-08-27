<?php
function alphabet_position(string $s): string {
    $letter = str_replace(" ", "",$s);
    $string = preg_replace('/[^A-Za-z0-9\-]/', '',$letter);
    $Chars = "abcdefghijklmnopqrstuvwxyz";
    $CharArr = str_split($Chars);
    $start_one = array_combine(range(1, count($CharArr)), array_values($CharArr));
    $InputChar = str_split(strtolower($string));
   $start_two = array_combine(range(1, count($InputChar)), array_values($InputChar));
   $newChar = [];
    foreach($start_two as $key => $value){
     $newChar[] = array_search($value,$start_one);
   }
    
   $str = implode(" ",$newChar);
   return $str;
 }

 $obj = alphabet_position("mdkjisiudroiewurffbdhiwnci");
 echo $obj;