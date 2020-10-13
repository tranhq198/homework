<?php
/**
 * Create a variable $date with period is y = 2020 m = 4 d = 29
 */
$hours = date("h");
$minute = date("i");
$second = date("s");
$designated_time = mktime($hours,$minute,$second,4,29,2020);

echo "designated time: ".date("Y/m/d h:i:s",$designated_time);
