<?php
declare(strict_types=1);

use PHPUnit\Framework\TestCase;

require_once 'prime.php';

final class GeneratorTest extends TestCase
{

    public function testPrimeGenerator()
    {
        $primes = iterator_to_array(primeGenerator(100));
        self::assertEquals([2, 3, 5, 7, 11, 13, 17, 19, 23, 29, 31, 37, 41, 43, 47, 53, 59, 61, 67, 71, 73, 79, 83, 89, 97], $primes);
    }
}
