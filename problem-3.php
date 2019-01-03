<?php
declare(strict_types=1);

/**
 * Problem 3 :
 * ===========
 *
 * The prime factors of 13195 are 5, 7, 13 and 29.
 *
 * What is the largest prime factor of the number 600851475143 ?
 *
 * @see https://projecteuler.net/problem=3
 */

require_once 'generators/prime.php';

$quotient     = 600851475143;
$biggestPrime = 2;

while (true) {
    $limit = sqrt($quotient);

    foreach (primeGenerator($limit) as $prime) {

        // End when the quotient is a prime.
        if ($quotient === $prime) {
            $biggestPrime = max($biggestPrime, $prime);
            break 2;
        }

        // Search for a prime divisor.
        if ($quotient % $prime === 0) {
            $quotient     = $quotient / $prime;
            $biggestPrime = max($biggestPrime, $prime);
        }
    }
}

echo $biggestPrime;