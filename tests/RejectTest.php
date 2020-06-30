<?php

namespace CodeWars\Tests;

use PHPUnit\Framework\TestCase;

use function CodeWars\reject;

class RejectTest extends TestCase
{
    public function testDescriptionExample()
    {
        $this->assertEquals([1, 3, 5], reject([1, 2, 3, 4, 5, 6], function ($n) {
            return $n % 2 == 0;
        }));
    }
}
