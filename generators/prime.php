<?php
declare(strict_types=1);

/**
 * Generates prime numbers.
 * Limits can be defined, either with a max value or a max iteration.
 *
 * @param int   $maxIteration Number of prime to generate or PHP_INT_MAX if null.
 * @param float $maxValue     Maximum value to generate or PHP_INT_MAX if null.
 *
 * @return Generator
 */
function primeGenerator(int $maxIteration = null, float $maxValue = null): Generator
{
    $maxIteration = $maxIteration ?? PHP_INT_MAX;
    $maxValue     = $maxValue ?? (float)PHP_INT_MAX;
    $count        = 0;

    for ($n = 2; $n <= $maxValue; $n++) {

        $halfN = $n / 2;
        for ($d = 2; $d <= $halfN; $d++) {

            // If $d divides $n...
            if ($n % $d === 0) {
                // ...skip and try the next $n directly.
                continue 2;
            }

        }

        // This $n is a prime.
        $count++;
        yield $n;

        if ($count >= $maxIteration) {
            return;
        }
    }
}