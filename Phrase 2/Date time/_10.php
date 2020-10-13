<?php
/**
 *   Create a script to get start and end date of a week (by week number) of a particular year
 *   Sample week and year : 10, 2020
 *   Expected Result : Starting date of the week: xx-xx-xx - End date the week: xx-xx-xx
 */

function getStartAndEndDate($week, $year) {
    $time = new DateTime();
    $time->setISODate($year, $week);
    $ret['week_start'] = $time->format('d-m-Y');
    date_modify($time, "+ 7 day");
    $ret['week_end'] = $time->format('d-m-Y');
    return $ret;
}

$week_array = getStartAndEndDate(1,2020);
print_r($week_array);

