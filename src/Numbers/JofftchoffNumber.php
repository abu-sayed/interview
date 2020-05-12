<?php

namespace Numbers;

use Numbers\Number;

class JofftchoffNumber extends Number
{
    public function processNumbers(int $start, int $end)
    {
        $results = [];

        for ($i = $start; $i <= $end; $i++) {
            $item = '';

            if (in_array($i, [1, 4, 9]) && $i > 5) {
                $item = 'jofftchoff';
            } else if ($i > 5) {
                $item = 'tchoff';
            } else if (in_array($i, [1, 4, 9])) {
                $item = 'joff';
            }

            if ($item === '') {
                $item = $i;
            }
            
            $results [] = $item;
        }

        return $results;
    }
}