<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     */
    public function test_that_true_is_true(): void
    {
        $this->assertTrue(true);
    }

    public function test_that_true_is_false(): void
    {
        $this->assertFalse(false);
    }

    public function test_that_true_is_1_plus_1(): void
    {
        $this->assertTrue(1 + 1 == 2);
    }
    public function test_that_wrong_test(): void
    {
        $this->assertFalse(true);
    }
}
