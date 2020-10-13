<?php
/**
 * Create a script to determine time 29 days ago
 */
$timezone = date_default_timezone_set('Asia/Ho_Chi_Minh');
$timeNow = date("d/m/Y h:i:s");
echo "Today: ".$timeNow."<br>";
$_29daysAgo = strtotime("- 29 day");
echo "29 days ago: ".date("d/m/Y h:i:s",$_29daysAgo);
