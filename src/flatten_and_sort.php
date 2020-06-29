<?php

namespace CodeWars;

function flatten_and_sort($array)
{
    $array = array_merge(...$array);
    sort($array);

    return $array;
}
