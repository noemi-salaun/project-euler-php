<?php
declare(strict_types=1);

/**
 * Problem 2 :
 * ===========
 *
 * Each new term in the Fibonacci sequence is generated by adding the previous two terms.
 * By starting with 1 and 2, the first 10 terms will be:
 *
 *                1, 2, 3, 5, 8, 13, 21, 34, 55, 89, ...
 *
 * By considering the terms in the Fibonacci sequence whose values do not exceed four million,
 * find the sum of the even-valued terms.
 *
 * @see https://projecteuler.net/problem=2
 *
 * @param int $limit
 *
 * @return int
 */
function problem2(int $limit = 4000000): int
{
    $n1  = 1;
    $n2  = 1;
    $sum = 0;

    while ($n2 < $limit) {
        $tmp = $n1 + $n2;
        $n1  = $n2;
        $n2  = $tmp;

        if ($n2 % 2 === 0) {
            $sum += $n2;
        }
    }

    return $sum;
}

