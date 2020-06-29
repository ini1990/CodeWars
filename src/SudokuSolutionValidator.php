<?php

namespace CodeWars;

function valid_solution(array $m): bool
{
    $correct = range(1, 9, 1);
    $subGrids = [];
    foreach ($m as $key => $value) {
        $column = array_column($m, $key);
        sort($column);
        $subGrids[0] = array_merge($subGrids[0] ?? [], array_chunk($value, 3)[0]);
        $subGrids[1] = array_merge($subGrids[1] ?? [], array_chunk($value, 3)[1]);
        $subGrids[2] = array_merge($subGrids[2] ?? [], array_chunk($value, 3)[2]);
        sort($value);
        if ($correct !== $column) {
            return false;
        }
        if ($correct !== $value) {
            return false;
        }
    }
    foreach ($subGrids as $value) {
        $v1 = array_chunk($value, 9)[0];
        $v2 = array_chunk($value, 9)[1];
        $v3 = array_chunk($value, 9)[2];
        sort($v1);
        sort($v2);
        sort($v3);
        if ($v1 !== $correct || $correct !== $v2 || $correct !== $v3) {
            return false;
        }
    }
    return true;
}
