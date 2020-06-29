<?php

namespace CodeWars\Tests;

use PHPUnit\Framework\TestCase;

use function CodeWars\toCamelCase;

class ToCamelCaseTest extends TestCase
{
    public function testSampleCases()
    {
        $this->assertEquals("theStealthWarrior", toCamelCase("the_stealth_warrior"), "toCamelCase('the_stealth_warrior') did not return correct value");
        $this->assertEquals("theStealthWarrior", toCamelCase("the-Stealth-Warrior"), "toCamelCase('the-Stealth-Warrior') did not return correct value");
    }
}
