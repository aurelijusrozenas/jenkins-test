<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

class ThisIsTheTest extends TestCase
{
    public function testSuccess(): void
    {
        $var = true;
        self::assertTrue($var);
    }

    public function testFail(): void
    {
        $var = true;
        self::assertTrue($var);
    }
}
