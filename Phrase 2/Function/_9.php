<?php
/**
 *   Create a function to create a new array of given length using the odd numbers from a given array of positive integers
 * Sample Input:
{1,2,3,5,7,9,10},3
Expected Output:
New array: 1,3,5
 */
function createNewArr($nums, $count)
{
    $evens = [$count];
    $j = 0;
    for ($i = 0; $j < $count; $i++)
    {
        if ($nums[$i] % 2 != 0)
        {
            $evens[$j] = $nums[$i];
            $j++;
        }
    }
    return $evens;
}

$result = createNewArr([1,2,3,5,7,9,10], 3);
echo "New array: ".implode(",", $result);


