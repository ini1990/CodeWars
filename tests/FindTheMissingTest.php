<?php

namespace CodeWars\Tests;

use PHPUnit\Framework\TestCase;

use function CodeWars\findMissing;

class FindTheMissingTest extends TestCase
{
    public function testBasic()
    {
        $this->assertEquals(4, findMissing([1, 2, 3, 5]));
        $this->assertEquals(7, findMissing([1, 3, 5, 9, 11]));
        $this->assertEquals(400, findMissing([100, 200, 300, 500]));
    }
}
