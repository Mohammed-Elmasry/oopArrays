<?php


use Codebuster\OopArrays\ArrayList;
use PHPUnit\Framework\TestCase;

class InsertIntoArrayTest extends TestCase
{
    public function test_inserting_into_empty_array_yields_an_array_of_length_1()
    {
        $arr = new ArrayList();
        $arr->insert(12);

        $this->assertEquals(1, $arr->length());
    }

    public function test_inserting_into_non_empty_array_adds_element_to_beginning_of_array()
    {
        $arr = new ArrayList([1]);
        $arr->insert(2);

        $this->assertEquals(2, $arr[0]);
        $this->assertEquals(1, $arr[1]);
    }
}