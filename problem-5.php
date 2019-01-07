<?php
declare(strict_types=1);

/**
 * Problem 5 :
 * ===========
 *
 * 2520 is the smallest number that can be divided by each of the numbers from 1 to 10 without any remainder.
 *
 * What is the smallest positive number that is evenly divisible by all of the numbers from 1 to 20?
 *
 * @see https://projecteuler.net/problem=5
 *
 * @param int $limit
 *
 * @return int
 */
function problem5(int $limit = 20): int
{
    $result = 1;

    for ($i = 1; $i <= $limit; $i++) {

        // Incremental search based on the previous result found.
        $increment = $result;

        while ($result % $i !== 0) {
            $result += $increment;
        }
    }

    return $result;
}

/**
 * @deprecated First solution, archived.
 *
 * @param int $limit
 *
 * @return int
 */
function oldProblem5(int $limit = 20): int
{
    $increment = 1;

    // Iterativly search for lower solution and use the previous result to optimize the next search.
    for ($lowerLimit = 1; $lowerLimit <= $limit; $lowerLimit++) {
        $increment = doProblem5($lowerLimit, $increment);
    }

    return $increment;
}

/**
 * Use an optimized $increment value to search for the solution.
 *
 * @param int $limit
 * @param int $increment
 *
 * @return int
 */
function doProblem5(int $limit, int $increment): int
{

    // No need to test sub-multiples.
    $threshold = $limit / 2;

    $n = 0;
    do {
        $n += $increment;

        $ok = true;

        // We increment by a multiple of $limit each time, so no need to test $limit.
        // Stop to $threshold because ne need to test sub-multiples.
        for ($i = $limit - 1; $i > $threshold; $i--) {
            if ($n % $i !== 0) {
                $ok = false;
                break;
            }
        }

    } while (!$ok);

    return $n;
}

