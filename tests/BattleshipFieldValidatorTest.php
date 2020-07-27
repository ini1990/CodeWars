<?php

namespace CodeWars\Tests;

use PHPUnit\Framework\TestCase;
use CodeWars\BattleshipFieldValidator;

class BattleshipFieldValidatorTest extends TestCase
{
    public function testExample()
    {
        $validator = new BattleshipFieldValidator;
        $this->assertTrue($validator->validate_battlefield([
        [1, 0, 0, 0, 0, 1, 1, 0, 0, 0],
        [1, 0, 1, 0, 0, 0, 0, 0, 1, 0],
        [1, 0, 1, 0, 1, 1, 1, 0, 1, 0],
        [1, 0, 0, 0, 0, 0, 0, 0, 0, 0],
        [0, 0, 0, 0, 0, 0, 0, 0, 1, 0],
        [0, 0, 0, 0, 1, 1, 1, 0, 0, 0],
        [0, 0, 0, 0, 0, 0, 0, 0, 1, 0],
        [0, 0, 0, 1, 0, 0, 0, 0, 0, 0],
        [0, 0, 0, 0, 0, 0, 0, 1, 0, 0],
        [0, 0, 0, 0, 0, 0, 0, 0, 0, 0]]));
    }
}
