<?php
declare(strict_types=1);

require_once 'functions/palindrome.php';

/**
 * Problem 4 :
 * ===========
 *
 * A palindromic number reads the same both ways.
 * The largest palindrome made from the product of two 2-digit numbers is 9009 = 91 × 99.
 *
 * Find the largest palindrome made from the product of two 3-digit numbers.
 *
 * @see https://projecteuler.net/problem=4
 *
 * @param int $nbDigits
 *
 * @return int
 */
function problem4(int $nbDigits = 3): int
{

    // Fill an array with numbers from 10... to 99...
    $startIndex = (int)str_pad('1', $nbDigits, '0');
    $num        = (int)str_pad('9', $nbDigits, '0');
    $numbers    = array_reverse(array_keys(array_fill($startIndex, $num, 0)));

    $max = 0;

    // Keep the best N for early break. No need of the best M, because we iterate from top to bottom.
    $bestN = 0;

    foreach ($numbers as $m) {
        foreach ($numbers as $n) {

            // Break early if $n less than our best match.
            if ($n <= $bestN) {
                break;
            }

            $product = $m * $n;

            if ($product > $max && isPalindrome((string)$product)) {
                $bestN = $n;
                $max   = $product;
            }
        }
    }

    return $max;
}
