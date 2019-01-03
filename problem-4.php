<?php
declare(strict_types=1);

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
 */

require_once 'functions/palindrome.php';

function threeDigitGenerator(): Generator
{
    for ($i = 999; $i > 99; $i--) {
        yield $i;
    }
}

$numbers = array_reverse(array_keys(array_fill(100, 900, 0)));

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

echo $max;