<?php

namespace CodeWars;

function is_solved(array $board): int
{
    $X = [1, 1, 1];
    $O = [2, 2, 2];
    $diagonalLines = [];
    foreach ($board as $key => $value) {
        $column = array_column($board, $key);
        $diagonalLines[0][] = $value[$key];
        $diagonalLines[1][] = $value[count($board) - $key - 1];
        if ($X == $column || $value == $X) {
            return 1;
        } elseif ($O == $column || $value == $O) {
            return 2;
        }
    }
    if ($X == $diagonalLines[0] || $diagonalLines[1] == $X) {
        return 1;
    } elseif ($O == $diagonalLines[0] || $diagonalLines[1] == $O) {
        return 2;
    } elseif (in_array(0, $board[0]) || in_array(0, $board[1]) || in_array(0, $board[2])) {
        return -1;
    }
    return 0;
}
