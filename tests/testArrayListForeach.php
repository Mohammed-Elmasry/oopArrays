<?php


use Codebuster\OopArrays\ArrayList;
use PHPUnit\Framework\TestCase;

class testArrayListForeach extends TestCase
{
    public function test_array_list_is_iterable(): void
    {
        $counter = 0;
        $al = new ArrayList([1, 2, 3, 4]);
        foreach ($al as $item) {
            $counter++;
        }

        self::assertEquals(4, $counter);
    }

    public function test_foreach_iteration_array_list_element_is_retrieved(): void
    {
        $al = new ArrayList([1, 2, 3, 4]);
        $index = 1;
        foreach ($al as $item) {
            self::assertEquals($index++, $item);
        }
    }
}