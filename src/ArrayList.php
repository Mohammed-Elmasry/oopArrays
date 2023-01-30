<?php

namespace Codebuster\OopArrays;

use ArrayAccess;
use Codebuster\OopArrays\Exceptions\ArrayOutOfBoundException;
use Codebuster\OopArrays\Traits\ArrayAccessible;
use Iterator;

/**
 * Class ArrayList
 *
 */
class ArrayList implements ArrayAccess, Iterator
{
    use ArrayAccessible;

    public const EMPTY_LENGTH = 0;
    private $array;
    private $pointer;

    public function __construct(array $arr = [])
    {
        $this->pointer = 0;
        $this->array = $arr;
    }

    /**
     * Check if array is empty.
     * @return bool
     */
    public function isEmpty(): bool
    {
        return count($this->array) === self::EMPTY_LENGTH;
    }

    /**
     * Get array length.
     * @return int
     */
    public function length(): int
    {
        return count($this->array);
    }

    public function current()
    {
        return $this->array[$this->pointer];
    }

    public function next(): void
    {
        ++$this->pointer;
    }

    public function key()
    {
        return $this->array[$this->pointer];
    }

    public function valid(): bool
    {
        return isset($this->array[$this->pointer]);
    }

    public function rewind(): void
    {
        $this->pointer = 0;
    }
}

