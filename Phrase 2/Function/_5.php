<?php
/**
 *  Create a function to sort a numeric array
 */

function sortANumber($numbers) {
    sort($numbers);
    print_r($numbers);
}

$numbers = array(2,3,5,7,1,4,9,0);
sortANumber($numbers);
