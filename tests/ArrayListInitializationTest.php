<?php

use Codebuster\OopArrays\ArrayList;

use PHPUnit\Framework\TestCase;

class ArrayListInitializationTest extends TestCase
{
    public function test_initialized_array_with_empty_constructor_is_empty(): void
    {
        $al = new ArrayList();
        self::assertTrue($al->isEmpty());
    }


    public function test_initialized_array_with_another_array_passed_in_constructor_is_not_empty(): void
    {
        $al = new ArrayList([1, 2, 3, 4]);
        self::assertFalse($al->isEmpty());
    }

    public function test_initialized_array_has_same_length_as_array_given_in_constructor(): void
    {
        $al = new ArrayList([1, 2, 3]);
        self::assertEquals(3, $al->length());

        $al2 = new ArrayList([1, 2, 3, 4, 5, 6]);
        self::assertEquals(6, $al2->length());

        $al3 = new ArrayList([]);
        self::assertEquals(0, $al3->length());

    }
}