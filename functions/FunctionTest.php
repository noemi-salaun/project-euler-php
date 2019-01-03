<?php
declare(strict_types=1);

use PHPUnit\Framework\TestCase;

require_once 'palindrome.php';

final class FunctionTest extends TestCase
{

    public function testPalindrome()
    {
        self::assertTrue(isPalindrome('kayak'));
        self::assertTrue(isPalindrome('a'));
        self::assertTrue(isPalindrome('aa'));
        self::assertTrue(isPalindrome('aaa'));
        self::assertTrue(isPalindrome('abba'));
        self::assertTrue(isPalindrome('125521'));

        self::assertFalse(isPalindrome('abc'));
        self::assertFalse(isPalindrome('ab'));
        self::assertFalse(isPalindrome('123'));
    }
}
