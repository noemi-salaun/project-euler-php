<?php
declare(strict_types=1);

/**
 * Generates prime numbers less than $max.
 *
 * @param float $max
 *
 * @return Generator
 */
function primeGenerator(float $max): Generator
{
    for ($n = 2; $n <= $max; $n++) {

        $halfN = $n / 2;
        for ($d = 2; $d <= $halfN; $d++) {

            // If $d divides $n...
            if ($n % $d === 0) {
                // ...skip and try the next $n directly.
                continue 2;
            }

        }

        // This $n is a prime.
        yield $n;
    }
}