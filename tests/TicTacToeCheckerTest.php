<?php

namespace CodeWars\Tests;

use PHPUnit\Framework\TestCase;

use function CodeWars\is_solved;

final class TicTacToeCheckerTest extends TestCase
{
    public function testExample()
    {
        $this->assertEquals(-1, is_solved([
        [0, 0, 1],
        [0, 1, 2],
        [2, 1, 0]]));
    }
}
