<?php

function time_to_sec($time) {
    $hours = substr($time, 0, -6);
    $minutes = substr($time, -5, 2);
    $seconds = substr($time, -2);

    return $hours * 3600 + $minutes * 60 + $seconds;
}

function sec_to_time($seconds) {
    $hours = floor($seconds / 3600);
    $minutes = floor($seconds % 3600 / 60);
    $seconds = $seconds % 60;

    return sprintf("%d:%02d:%02d", $hours, $minutes, $seconds);
} 


function timeDiff($firstTime,$lastTime)
{

// convert to seconds
$firstTime=time_to_sec($firstTime);
$lastTime=time_to_sec($lastTime);

// perform subtraction to get the difference (in seconds) between times
$timeDiff=$lastTime-$firstTime;

// return the difference
return sec_to_time($timeDiff);
}


function getTheDuration($startTime, $finishTime)
{
$date_a_obj = new DateTime($startTime);
$date_b_obj = new DateTime($finishTime);

$interval = $date_a_obj->diff($date_b_obj);
$interval = $interval->format('%H:%I:%S');
return $interval;
}

?>