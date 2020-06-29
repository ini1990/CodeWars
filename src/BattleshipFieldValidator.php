<?php

namespace CodeWars;

function validate_battlefield(array $field): bool
{
    $n = count($field);
    for ($i = 0; $i < $n - 1; $i++) {
        for ($j = 0, $J = $n - 1; $j < $n - 1; $j++, $J--) {
            if (($field[$i][$j] == 1) && ($field[$i + 1][$j + 1] == $field[$i][$j])) {
                return false;
            }
            if (($field[$i][$J] == 1) && ($field[$i + 1][$J - 1] == $field[$i][$J])) {
                return false;
            }
        }
    }
    
    $ships = ['1' => 4, '2' => 3, '3' => 2, '4' => 1];
    
    $countedShips = [];
    for ($i = 0; $i < $n; $i++) {
        for ($j = 0; $j < $n; $j++) {
            if (!empty($field[$i][$j])) {
                $key = "{$i}-{$j}";
                $countedShips[$key] = 0;
                if (!empty($field[$i + 1][$j])) {
                    $I = 0;
                    while (!empty($field[$i + $I][$j])) {
                        $field[$i + $I][$j] = 0;
                        $I++;
                        $countedShips[$key]++;
                    }
                } elseif (!empty($field[$i][$j + 1])) {
                    $J = 0;
                    while (!empty($field[$i][$j + $J])) {
                        $field[$i][$j + $J] = 0;
                        $J++;
                        $countedShips[$key]++;
                    }
                } else {
                    $field[$i][$j] = 0;
                    $countedShips[$key]++;
                }
            }
        }
    }
    return array_count_values($countedShips) == $ships;
}
