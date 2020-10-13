<?php
/**
 *  Create a function to compute the sum of the two given integer values. If the two values are the same, then returns triple their sum
 *  Sample Input
1, 2
3, 2
2, 2
Expected result:
3
5
12
 */

function calculate ($x, $y) {
    return $x == $y ? ($x + $y)*3 : $x + $y;
}
echo calculate(2,2);
