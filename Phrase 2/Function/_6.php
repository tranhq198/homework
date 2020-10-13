<?php
/**
 *  Create a function that checks whether a string variable is all lowercase
 */

function CheckString($str) {
    $check = ctype_lower($str);
    if ($check) {
    echo "True, all characters are in lower case" ;
    } else {
    echo "False, all characters are not in lower case" ;
    }
}

CheckString("hoangquoctran");


