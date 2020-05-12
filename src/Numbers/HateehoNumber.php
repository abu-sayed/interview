<?php

namespace Numbers;

use Numbers\Number;

class HateehoNumber extends Number
{
    public function processNumbers(int $start, int $end)
    {
        $results = [];

        for ($i = $start; $i <= $end; $i++) {
            $item = '';

            if ($this->isDivisibleBy7($i) === true) {
                $item = 'ho';
            }
            
            if ($this->isDivisibleBy2($i) === true) {
                $item = 'hatee';
            }
            
            if ($this->isDivisibleBy2($i) === true && $this->isDivisibleBy7($i) === true){
                $item = 'hateeho';
            }

            if ($item === '') {
                $item = $i;
            }
            
            $results [] = $item;
        }
        return $results;
    }
}