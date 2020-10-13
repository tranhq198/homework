<?php
/**
 *  Convert string to time - 9 October 2020
 */
$time = strtotime('9 October 2020');

$newFormat = date('d/m/Y',$time);

echo $newFormat;
