<?php

namespace CodeWars\Tests;

use PHPUnit\Framework\TestCase;

use function CodeWars\flatten_and_sort;

class FlattenAndSortTest extends TestCase
{
    public function testBasic()
    {
        $this->assertEquals(flatten_and_sort([[]]), []);
        $this->assertEquals(flatten_and_sort([[], []]), []);
        $this->assertEquals(flatten_and_sort([[], [1]]), [1]);
        $this->assertEquals(flatten_and_sort([[], [], [], [2], [], [1]]), [1, 2]);
        $this->assertEquals(flatten_and_sort([[3, 2, 1], [7, 9, 8], [6, 4, 5]]), [1, 2, 3, 4, 5, 6, 7, 8, 9]);
        $this->assertEquals(flatten_and_sort([[1, 3, 5], [100], [2, 4, 6]]), [1, 2, 3, 4, 5, 6, 100]);
        $this->assertEquals(flatten_and_sort([[111, 999], [222], [333], [444], [888], [777], [666], [555]]), [111, 222, 333, 444, 555, 666, 777, 888, 999]);
    }
}
