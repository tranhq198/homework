<?php
/**
 *   Create a function to check a given array of integers and return true if the given array contains two 5's next to each other, or two 5 separated by one element
 * Sample Input:
{ 5, 5, 1, 5, 5 }
{ 1, 2, 3, 4 }
{ 3, 3, 5, 5, 5, 5}
{ 1, 5, 5, 7, 8, 10}
Expected Output:
true
false
true
true
 */
function checkArray($arr) {
    $lengthArr = count($arr);
    for($i = 0; $i <= $lengthArr; $i++ ) {
        if($arr[$i] == 5 && $arr[$i + 1] == $arr[$i] ) {
            return true;
        } else {
            return false;
        }
    }
}
$arr = array(5, 3, 1, 5, 5, 5);
var_dump(checkArray($arr));
