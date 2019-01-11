<?php
declare(strict_types=1);

/**
 * Problem 5 :
 * ===========
 *
 * The sum of the squares of the first ten natural numbers is,
 *
 *           1² + 2² + ... + 10² = 385
 * The square of the sum of the first ten natural numbers is,
 *
 *           (1 + 2 + ... + 10)² = 55² = 3025
 * Hence the difference between the sum of the squares of the first ten natural numbers
 * and the square of the sum is 3025 − 385 = 2640.
 *
 * Find the difference between the sum of the squares of the first one hundred natural numbers
 * and the square of the sum.
 *
 * @see https://projecteuler.net/problem=6
 *
 * @param int $limit
 *
 * @return int
 */
function problem6(int $limit = 100): int
{

    // Mathematical formula from http://villemin.gerard.free.fr/Wwwgvmm/Identite/SomDemo.htm

    $sum       = (int)($limit * ($limit + 1) / 2);
    $squareSum = (int)($limit * ($limit + 1) * (2 * $limit + 1) / 6);

    return $sum * $sum - $squareSum;
}
