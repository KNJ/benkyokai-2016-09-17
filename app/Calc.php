<?php

namespace App;

/**
 * 計算
 */
class Calc
{
    /**
     * 1 + 2 + 3 + 4 + 5 + .... + n
     */
    public function kaisa(int $n): int
    {
        $sum = 0;
        for ($k = 1; $k <= $n; $k++) {
            $sum += $k;
        }

        return $sum;
    }
}
