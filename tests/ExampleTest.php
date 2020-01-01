<?php

use PHPUnit\Framework\TestCase;

class ExampleTest extends TestCase
{
    public function testCalculation(): void
    {
        $this->assertEquals(1 + 1, 2);
    }
}
