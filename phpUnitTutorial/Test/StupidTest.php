<?php

namespace phpUnitTutorial\Test;

use PHPUnit\Framework\TestCase;

class StupidTest extends TestCase
{
    public function testTrueIsTrue()
    {
        $foo = true;
        $this->assertTrue($foo);
    }
}