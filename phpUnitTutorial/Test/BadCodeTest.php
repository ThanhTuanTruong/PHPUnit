<?php

namespace phpUnitTutorial\Test;

use PHPUnit\Framework\TestCase;

class BadCodeTest extends TestCase
{
    public function testAuthorizeExitsWhenPasswordNotSet()
    {
        $user = ['username' => 'Shaun'];

        $password = 'foo';

        $badcode = $this->getMockBuilder('phpUnitTutorial\BadCode')
                    ->setConstructorArgs([$user])
                    ->onlyMethods(['callExit'])
                    ->getMock();

        $badcode->expects($this->once())
                ->method('callExit');

        $this->expectOutputString('YOU SHALL NOT PASS');

        $badcode->authorize($password);
    }
}