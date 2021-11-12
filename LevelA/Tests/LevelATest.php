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
        $str = new Palindrome('def');

        $this->assertEquals('abc', $str->generatePalindrome());
    }

    public function testC()
    {
        $str = new Palindrome('lö');

        $this->assertEquals('abc', $str->generatePalindrome());
    }
}