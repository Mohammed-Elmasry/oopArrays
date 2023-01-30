<?php

use Codebuster\OopArrays\ArrayList;

use Codebuster\OopArrays\Exceptions\ArrayOutOfBoundException;
use PHPUnit\Framework\TestCase;

class testArrayListArrayAccessible extends TestCase
{
    private $al;

    protected function setUp(): void
    {
        parent::setUp();
        $this->al = new ArrayList();
    }

    public function test_empty_array_list_throws_exception_when_missing_index_is_accessed(): void
    {
        $this->expectException(ArrayOutOfBoundException::class);
        $this->al[0];
    }

    public function test_setting_an_element_at_index_changes_identity_at_that_index(): void
    {
        $this->al[0] = 1;
        self::assertEquals(1, $this->al[0]);

        $this->al[0] = 2;
        self::assertEquals(2, $this->al[0]);
    }

    protected function tearDown(): void
    {
        unset($this->al);
        parent::tearDown();
    }
}