<?php
declare(strict_types=1);

/**
 * Problem 1 :
 * ===========
 *
 * If we list all the natural numbers below 10 that are multiples of 3 or 5, we get 3, 5, 6 and 9.
 * The sum of these multiples is 23.
 *
 * Find the sum of all the multiples of 3 or 5 below 1000.
 *
 * @see https://projecteuler.net/problem=1
 */

$sum = 0;

for ($n = 1; $n < 1000; $n++) {
    if ($n % 5 === 0 || $n % 3 === 0) {
        $sum += $n;
    }
}

echo $sum;