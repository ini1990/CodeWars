<?php

namespace CodeWars\Tests;

use PHPUnit\Framework\TestCase;

use function CodeWars\format_duration;

class FormatDurationTest extends TestCase
{
    public function testExample()
    {
        $this->assertEquals("1 second", format_duration(1));
        $this->assertEquals("1 minute and 2 seconds", format_duration(62));
        $this->assertEquals("2 minutes", format_duration(120));
        $this->assertEquals("1 hour", format_duration(3600));
        $this->assertEquals("1 hour, 1 minute and 2 seconds", format_duration(3662));
        $this->assertEquals("now", format_duration(0));
        $this->assertEquals("105 days, 4 hours and 8 minutes", format_duration(9086880));
        $this->assertEquals("4 years, 68 days, 3 hours and 4 minutes", format_duration(132030240));
    }
}
