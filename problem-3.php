<?php
declare(strict_types=1);

require_once 'generators/prime.php';

/**
 * Problem 3 :
 * ===========
 *
 * The prime factors of 13195 are 5, 7, 13 and 29.
 *
 * What is the largest prime factor of the number 600851475143 ?
 *
 * @see https://projecteuler.net/problem=3
 *
 * @param int $number
 *
 * @return int
 */
function problem3(int $number = 600851475143): int
{
    /** @var float $quotient We need to keep track of the quotient between iterations. */
    $quotient = $number;

    // Default value.
    $biggestPrime = 2;

    while (true) {
        $limit = sqrt($quotient);

        foreach (primeGenerator(null, $limit) as $prime) {

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

    return $biggestPrime;
}
