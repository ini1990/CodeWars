<?php

namespace CodeWars;

function snail($array)
{
    if (count($array) == 0) {
        return $array;
    }
    $result = [];
    while (count($array) !== 0) {
        $result = array_merge($result, array_shift($array));
        $array = returnArray90($array);
    }
    return $result;
}

function returnArray90($arr)
{
    if (count($arr) == 0) {
        return $arr;
    }
    $n = count($arr);
    $nJ = count($arr[0]);
    $newArr = [];
    for ($j = $nJ - 1; $j >= 0; $j--) {
        for ($i = 0; $i < $n; $i++) {
            $newArr[$j][$i] = $arr[$i][$j];
        }
    }
    return $newArr;
}
