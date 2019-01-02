<?php
declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class Test extends TestCase
{

    public function test1(): void
    {
        self::assertEquals(233168, $this->getResponse(1));
    }

    public function test2(): void
    {
        self::assertEquals(4613732, $this->getResponse(2));
    }

    /**
     * @param int $problemId
     *
     * @return mixed
     */
    private function getResponse(int $problemId)
    {
        ob_start();

        require "problem-$problemId.php";

        return ob_get_flush();
    }
}
