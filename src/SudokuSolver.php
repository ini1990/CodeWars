<?php

namespace CodeWars;

function sudoku(array $puzzle): array
{
    $correct = range(1, 9);
    for ($i = 0; $i < 9; $i++) {
        for ($j = 0; $j < 9; $j++) {
            if ($puzzle[$i][$j] === 0) {
                $squares = array_diff($correct, array_column($puzzle, $j), $puzzle[$i], getSubGrid($puzzle, $i, $j));
                if (count($squares) === 1) {
                    $puzzle[$i][$j] = $squares[key($squares)];
                    return sudoku($puzzle);
                }
            }
        }
    }
    return $puzzle;
}

function getSubGrid($puzzle, $i, $j)
{
    $index = ($i - ($i % 3)) + (($j - ($j % 3)) / 3);
    $subGrids = [];
    $i = 0;
    foreach ($puzzle as $key => $value) {
        $subGrids[$i] = array_merge($subGrids[$i] ?? [], array_chunk($value, 3)[0]);
        $subGrids[$i + 1] = array_merge($subGrids[$i + 1] ?? [], array_chunk($value, 3)[1]);
        $subGrids[$i + 2] = array_merge($subGrids[$i + 2] ?? [], array_chunk($value, 3)[2]);
        if (($key + 1) % 3 == 0) {
            $i = $i + 3;
        }
    }
    return $subGrids[$index];
}
