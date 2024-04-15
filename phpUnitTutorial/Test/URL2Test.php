<?php

namespace phpUnitTutorial\Test;

use PHPUnit\Framework\TestCase;
use phpUnitTutorial\URL2;
use PHPUnit\Framework\Attributes\DataProvider;

class URL2Test extends TestCase
{
    #[DataProvider('sluggifiedProvider')]
    public function testSluggifyReturnsStringSluggified($originalString, $expectedResult)
    {
        $url = new URL2;

        $result = $url->sluggify($originalString);

        $this->assertEquals($expectedResult, $result);
    }

    public static function sluggifiedProvider()
    {
        return [
            ['This string will be sluggified', 'this-string-will-be-sluggified']
        ];
    }
}