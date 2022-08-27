<?php
function duplicateCount($text) {
    if(empty($text)){
        return 0;
      }else{
        return count(array_filter(array_count_values(str_split(strtolower($text))), function($el){return ($el > 1);})); 
     }
  }
  echo duplicateCount("abcdeae");