<?php

namespace Numbers;

class Number
{
    public function print(array $numbers, $seperator = ' ')
    {
        echo implode($seperator, $numbers);
    }

    public function isDivisibleBy2(int $number)
    {
        return $number % 2 === 0;
    }
    
    public function isDivisibleBy3(int $number)
    {
        return $number % 3 === 0;
    }

    public function isDivisibleBy5(int $number)
    {
        return $number % 5 === 0;
    }

    public function isDivisibleBy7(int $number)
    {
        return $number % 7 === 0;
    }
}