<?php
declare(strict_types=1);

require_once 'generators/prime.php';

/**
 * Problem 7 :
 * ===========
 *
 * By listing the first six prime numbers: 2, 3, 5, 7, 11, and 13, we can see that the 6th prime is 13.
 *
 * What is the 10 001st prime number?
 *
 * @see https://projecteuler.net/problem=7
 *
 * @param int $n
 *
 * @return int
 */
function problem7(int $n = 10001): int
{
    $primes = primeGenerator($n);

    foreach ($primes as $prime) {

    }

    return $prime;
}
