<?php
/**
 *   Create a function to create a new string from a given string without the first and last character
 * if the first or last characters are 'a' otherwise return the original given string
 * Sample Output:
 * "aTuan"
 * "aKaiyouIT"
 * "Japan"
 * Expected output:
 * "Tuan"
 * "KaiyouIT"
 * "Japan"
 */

function test($str)
{
    if (strlen($str) > 0 && substr($str, strlen($str)-1, 1) == "a")
    {
        $str = substr($str, 0, strlen($str) - 1);

    }

    if (strlen($str) > 0 && substr($str, 0, 1) == "a")
    {
        $str = substr($str, 1);

    }

    return $str;
}


echo test("aTuan") . "\n";
