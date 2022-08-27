<?php
function ReversePyramid($size){

    for($i = 0; $i < $size; $i++) {
        // print spaces
        for($j = 0; $j < $i; $j++) {
            echo "&nbsp;&nbsp;";
        }
        // print stars
        for($k = 0; $k < 2 * ($size - $i) - 1; $k++) {
            echo "*";
        }
        echo "<br>";
    }

}
$size = 20;
ReversePyramid($size);