<?php

namespace CodeWars;

function format_duration($seconds)
{
    if ($seconds === 0) {
        return 'now';
    }
    $years = floor($seconds / (3600 * 24 * 365));
    $days = floor($seconds / (3600 * 24)) % 365;
    $hours = floor($seconds / 3600) % 24;
    $minutes = floor($seconds / 60) % 60;
    $seconds %= 60;

    $result = [];
    foreach (array_filter(compact('years', 'days', 'hours', 'minutes', 'seconds')) as $key => $value) {
        $result[] = $value . ' ' . (($value == 1) ? substr($key, 0, -1) : $key);
    }
    $last = array_pop($result);
    return ($result) ? implode(', ', $result) . ' and ' . $last : $last;
}
