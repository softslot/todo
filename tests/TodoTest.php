<?php

namespace Todo\Tests;

use PHPUnit\Framework\TestCase;

class TodoTest extends TestCase
{
    public function testOne()
    {
        $expected = true;
        $result = true;

        $this->assertEquals($expected, $result);
    }
}
