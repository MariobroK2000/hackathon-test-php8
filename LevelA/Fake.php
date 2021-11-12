<?php

namespace Hackathon\LevelA;

class Fake
{
    private $str;

    public function __construct($str)
    {
        $this->str = $str;
    }

    /**
     * This function returns abc
     * 
     * @return string
     */
    public function generatePalindrome()
    {

        return 'abc';
    }

}
