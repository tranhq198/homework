<?php
/**
 *   Create a script to convert a date from yyyy-mm-dd to dd-mm-yyyy
 */

$date = date("y-m-d");
$newDate = date("d-m-Y", strtotime($date));
echo $newDate;
