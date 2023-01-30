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
}