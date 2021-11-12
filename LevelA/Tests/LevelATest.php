<?php

namespace Hackathon\LevelA\Tests;

use Hackathon\LevelA\Fake;

class LevelATest extends \PHPUnit\Framework\TestCase
{
    public function testA()
    {
        $str = new Fake('abc');

        $this->assertEquals('abc', $str->generatePalindrome());
    }

    public function testB()
    {
        $str = new Fake('def');

        $this->assertEquals('abc', $str->generatePalindrome());
    }

    public function testC()
    {
        $str = new Fake('lö');

        $this->assertEquals('abc', $str->generatePalindrome());
    }
}
