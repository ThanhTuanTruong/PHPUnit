<?php

use PHPUnit\Framework\TestCase;
use phpUnitTutorial\User;

class UserTest extends TestCase
{
    public function testGetUserReturnsUserWithExpectedValues()
    {
        $details = array();

        $user = new User($details);

        $password = 'fubar';

        $user->setPassword($password);

        $expectedPasswordResult = '5185e8b8fd8a71fc80545e144f91faf2';

        $currentUser = $user->getUser();

        $this->assertEquals($expectedPasswordResult, $currentUser['password']);
    }

    public function testSetPasswordReturnsFalse()
    {
        $details = [];

        $user = new User($details);

        $password = 'fub';

        $result = $user->setPassword($password);

        $this->assertFalse($result);
    }
}