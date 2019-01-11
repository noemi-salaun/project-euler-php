<?php
declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class ProblemTest extends TestCase
{

    public function test1(): void
    {
        require_once 'problem-1.php';

        // Exemple from the description.
        self::assertEquals(23, problem1(10));

        // Real problem.
        self::assertEquals(233168, problem1());
    }

    public function test2(): void
    {
        require_once 'problem-2.php';

        // Real problem.
        self::assertEquals(4613732, problem2());
    }

    public function test3(): void
    {
        require_once 'problem-3.php';

        // Exemple from the description.
        self::assertEquals(29, problem3(13195));

        // Real problem.
        self::assertEquals(6857, problem3());
    }

    public function test4(): void
    {
        require_once 'problem-4.php';

        // Exemple from the description.
        self::assertEquals(9009, problem4(2));

        // Real problem.
        self::assertEquals(906609, problem4());
    }

    public function test5(): void
    {
        require_once 'problem-5.php';

        // Exemple from the description.
        self::assertEquals(2520, problem5(10));

        // Real problem.
        self::assertEquals(232792560, problem5());
    }

    public function test6(): void
    {
        require_once 'problem-6.php';

        // Exemple from the description.
        self::assertEquals(2640, problem6(10));

        // Real problem.
        self::assertEquals(25164150, problem6());
    }
}
