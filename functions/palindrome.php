<?php
declare(strict_types=1);

/**
 * Check if a string is a palindrome.
 *
 * @param string $string
 *
 * @return bool
 */
function isPalindrome(string $string): bool
{
    $length     = strlen($string);
    $halfLength = $length / 2;

    for ($i = 0; $i < $halfLength; $i++) {
        if ($string[$i] !== $string[$length - $i - 1]) {
            return false;
        }
    }

    return true;
}