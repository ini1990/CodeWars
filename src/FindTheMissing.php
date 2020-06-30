<?php

namespace CodeWars;

function findMissing($list)
{
    $diff = (max($list) - min($list)) / count($list);
    if ($diff === 0) {
        return $list[0];
    }
    $progression = range(min($list), max($list), $diff);
    return current(array_diff($progression, $list));
}
