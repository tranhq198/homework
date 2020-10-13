<?php
/**
 *   Create a function to calculate the factorial of a number (a non-negative integer). The function accepts the number as an argument
 */


function factorial_of_a_number($n)
{
    $factorial = 1;
    for($i = 1; $i <= $n; $i++) {
        return $factorial *= $i;
    }
}
print_r(factorial_of_a_number(4)."\n");

