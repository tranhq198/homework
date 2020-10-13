<?php
/**
 *  Create a script will count the number of days between current day and birthday
 */

$timeNow = time();
$birthday = mktime(date('h'),date("i"),date('s'), 8,1,1998);
echo "birthday ".date("d/m/Y", $birthday);
echo "<br>";
$timeDistance = $timeNow - $birthday;
echo "result: ".($timeDistance / 86400);
