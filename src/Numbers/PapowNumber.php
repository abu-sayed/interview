<?php

namespace Numbers;

use Numbers\Number;

class PapowNumber extends Number
{
    public function processNumbers(int $start, int $end)
    {
        $results = [];

        for ($i = $start; $i <= $end; $i++) {
            $item = '';

            if ($this->isDivisibleBy5($i) === true) {
                $item = 'pow';
            }
            
            if ($this->isDivisibleBy3($i) === true) {
                $item = 'pa';
            }
        
            if ($this->isDivisibleBy3($i) === true && $this->isDivisibleBy5($i) === true) {
                $item = 'papow';
            }

            if ($item === '') {
                $item = $i;
            }
            
            $results [] = $item;
        }
        return $results;
    }
}